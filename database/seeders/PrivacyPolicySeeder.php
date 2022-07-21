<?php

namespace Database\Seeders;

use App\Models\PrivacyPolicy;
use App\Models\TermAndCondiition;
use Illuminate\Database\Seeder;

class PrivacyPolicySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PrivacyPolicy::create([
            'page_title' => 'Privacy & Policy',
            'page_desc'  => '<p>This is the Privacy Policy for the website. This Privacy Policy governs the manner in which <a href="https://www.vetvine.com">Veterinary Clinic</a> collects, uses, maintains and discloses information collected from users (each, a "User") of the <a href="https://www.vetvine.com">Veterinary Clinic</a> website ("Site"). This privacy policy applies to the Site and all products and services offered by <a href="https://www.vetvine.com">Vetvine Clinic</a>.</p>'
                .'<p>Please read this privacy policy carefully as it will help you make informed decisions about sharing your personal information with us.</p>
                <p>This privacy policy applies to all information collected through the Site. It will not apply to information collected offline or via other means.</p>
                <p>This privacy policy is effective as of the date it is posted on the Site. Please review the privacy policy regularly for any changes. If you have any questions about this privacy policy, please contact us at <a href="mailto:vetvine.leadconcept.bussiness',
        ]);
        TermAndCondiition::create([
            'page_title' => 'Terms & Conditions',
            'page_desc'  => '<p>This is the Terms & Conditions for the website. This Terms & Conditions governs the manner in which <a href="https://www.vetvine.com">Veterinary Clinic</a> collects, uses, maintains and discloses information collected from users (each, a "User") of the <a href="https://www.vetvine.com">Veterinary Clinic</a> website ("Site"). This Terms & Conditions applies to the Site and all products and services offered by <a href="https://www.vetvine.com">Vetvine Clinic</a>.</p>'
                .'<p>Please read this Terms & Conditions carefully as it will help you make informed decisions about sharing your personal information with us.</p>
                <p>This Terms & Conditions applies to all information collected through the Site. It will not apply to information collected offline or via other means.</p>
                <p>This Terms & Conditions is effective as of the date it is posted on the Site. Please review the Terms & Conditions regularly for any changes. If you have any questions about this Terms & Conditions, please contact us at <a href="mailto:vetvine.leadconcept.bussiness',
        ]);


    }
}
