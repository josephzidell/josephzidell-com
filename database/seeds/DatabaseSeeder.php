<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BusinessTableSeeder::class);
        $this->call(PostTableSeeder::class);
    }
}

class PostTableSeeder extends DatabaseSeeder
{
	public function run()
	{
		# code...
	}
}

class BusinessTableSeeder extends DatabaseSeeder
{
	public function run()
	{
		DB::insert("INSERT INTO `businesses` (`id`, `name`, `description`, `logo`, `owner`, `testimonial`, `slug`, `position`, `created_at`, `updated_at`) VALUES (1,	'Rentals of Distinction',	'Rentals of Distinction is a small business providing luxury vacation rental apartments in Jerusalem. Their 6-person team, co-located in various offices, handles over 2,500 customers and close to 3,500 rentals in almost 200 apartments.<br />Contracts, checks, arrival forms for customers, daily to-dos, phone calls, and reservations are all part of the day at Rentals of Distinction.',	'logo-white.png',	'Akiva Bookman',	'We have had only a wonderful experience with Joseph Zidell. Joseph demonstrated positive communication, facilitating an excellent working environment. The front-end and back-end of my website is a breeze for my staff and I to use on a daily basis, and anyone who visits my site feels the same way. We have had countless compliments. Having this website and specifically the back-end, has enabled my company to grow much more quickly than I could have expected. Joseph is the only way to go.',	'rentals-of-distinction',	1,	'2014-02-11 20:49:28',	'2014-02-11 20:49:28')");
		DB::insert("INSERT INTO `businesses` (`id`, `name`, `description`, `logo`, `owner`, `testimonial`, `slug`, `position`, `created_at`, `updated_at`) VALUES (2,	'InCap Group, Inc.',	'InCap Group, Inc. is a small investment banking firm that specializes in the transactions and services for financial services firms. Their services include M&A advice, capital raising, valuations and fairness/fiduciary opinions. Many of their clients are small and medium-sized firms, though they have also worked with many of the largest firms in the U.S.',	'',	'James F. Tennies',	'I am very pleased to recommend the services of Joseph Zidell. When we met Joseph, we had a dated website with limited functionality. Joseph designed a client access area that allows our business to operate more efficiently and effectively. Joseph was an excellent project leader. He kept us on track and provided enough technical explanations for us to decide how to build the site without overwhelming us with techno-jargon. Joseph was available for the many phone calls and discussions we needed to decide on design and functionality. Once the site was launched, Joseph made all of the changes that we thought should be made. The site was launched earlier than it needed to be.',	'incap-group-inc',	2,	'2014-02-11 22:48:24',	'2014-02-11 22:48:24')");
	}
}