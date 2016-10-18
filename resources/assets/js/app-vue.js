Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('meta[name=_token]').getAttribute('content');

var ReusableComponents = {
	PostListComponent: {
		name: 'posts',
		title: 'All Posts',
		resourceUrl: 'api/post{/id}'
	}
};

$.each(ReusableComponents, function (index, reusableComponent) {
	ReusableComponents[index].component = Vue.component(reusableComponent.name, {
		template: '#post-list-template',

		data: function() {
			return {
				list: [],
				title: reusableComponent.title
			}
		},

		created: function() {
			this.resource = this.$resource(reusableComponent.resourceUrl);

			// if (typeof this.$route.params.id != 'undefined') {
			// 	this.fetchPostList(this.$route.params.id);
			// } else {
				this.fetchPostList();
			// }
		},

		watch: reusableComponent.watch,

		methods: {
			fetchPostList: reusableComponent.fetchPostList || function() {
				this.resource.get().then(function (posts) {
					response  = JSON.parse(posts.body);
					this.list = response;
				});
			},

			truncate: function(post) {
				return $.truncate(post.body_html, {
					length: 500,
					words: true,
					ellipsis: '...(<a v-link="{ path: \'post/\'' + post.slug + ' }">read more</a>)'
				});
			}
		},

		events: reusableComponent.events || {}
	});
});

var PostComponent = Vue.component('post', {
	template: '#post-template',

	data: function() {
		return {
			post: {},
			similars: [],
			previousPost: '',
			nextPost: ''
		}
	},

	watch: {
		'$route': function(route) {
			this.fetchPost(route.params.slug);
			this.similars = [];
		}
	},

	created: function() {
		this.resource = this.$resource('api/post{/slug}');

		this.fetchPost(this.$route.params.slug);
	},

	methods: {
		fetchPost: function(slug) {
			this.resource.get({ slug: slug }).then(function (post) {
				response   = JSON.parse(post.body);
				this.post         = response.post;
				// this.nextPost     = response.next != null ? response.next.slug : '';
				// this.previousPost = response.previous != null ? response.previous.slug : '';

				// this.fetchSimilar(1);
			});
		},

		fetchSimilar: function(page) {
			this.$http.get('api/post/' + this.$route.params.slug + '/similar/' + page).then(function(response) {
				var that = this
				response = JSON.parse(response.body);
				$.each(response.results, function (index, result) {
					that.similars.push(result);
				});

				if (response.page < response.total_pages && page < 3) {
					this.fetchSimilar(page + 1)
				}

				$('[data-toggle="tooltip"]').tooltip();
			});
		},

		poster_path: function(post) {
			return 'storage/posts/' + post.postdb_id + '/posters/1.jpg';
		},

		deletePost: function(post) {
			this.$http.delete('api/post/' + post.id).then(function() {
				return this.$router.go('/');
			});
		}
	}
});

var CrudComponents = {};

var crud = ['Genre', 'Actor'];
$.each(crud, function(index, singular) {
	var plural = singular + 's';
	CrudComponents[plural.toLowerCase()] = Vue.component(plural.toLowerCase(), {
		template: '#ancillary-list-template',

		data: function() {
			return {
				type: singular,
				list: []
			}
		},

		created: function() {
			this.resource = this.$resource('api/' + singular.toLowerCase() + '{/id}');

			this.fetchList();
		},

		methods: {
			fetchList: function() {
				this.resource.get().then(function (response) {
					this.list = JSON.parse(response.body);
				});
			}
		}
	});
})

var SearchComponent = Vue.component('search', {
	template: '#search-template',

	data: function() {
		return {
			q: '',
			postdbResults: {
				results: []
			},
			omdbResults: [],
			genres: []
		}
	},

	methods: {
		performSearch: function() {
			this.postdbResults.results = [];
			this.omdbResults = [];

			this.$http.post('api/search', { q: this.q }).then(function(response) {
				response = JSON.parse(response.body)

				this.postdbResults = response.postdbResults;
				this.omdbResults = response.omdbResults;
			});
		}
	}
});

var GenreSearchComponent = Vue.component('genre-search', {
	template: '#post-list-template',

	data: function() {
		return {
			genre: '',
			results: [],
			title: ''
		}
	},

	created: function() {
		var that = this;
		this.$http.get('api/genre').then(function(genres) {
			that.genres = JSON.parse(genres.body);
		})
	},

	methods: {
		genreSearch: function(genre) {
			this.title = genre.name
			this.$http.get('api/search/genre/' + genre.id).then(function(response) {
				response = JSON.parse(response.body)

				this.results = response.results;
			});
		}
	}
});

var App = Vue.extend({})
var router = new VueRouter();
router.map({
	'/': {
		component: ReusableComponents.PostListComponent.component
	},
	'/post/:slug': {
		component: PostComponent
	}
});

router.start(App, 'body')
