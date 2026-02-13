<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class SolutionsController extends Controller
{
    public function index()
    {
        $blogs = Blog::where('published_at', '!=', null)
            ->orderBy('published_at', 'desc')
            ->get();

        $faqs = [
            [
                'question' => 'What types of solutions does Specstech provide?',
                'answer' => 'Specstech provides comprehensive ICT solutions including infrastructure design, cloud computing, cybersecurity solutions, business applications, network optimization, and digital transformation services tailored to your business needs.'
            ],
            [
                'question' => 'How do you customize solutions for my business?',
                'answer' => 'We start with a thorough assessment of your current infrastructure and business goals. Our experts then design customized solutions that align with your specific requirements, budget, and growth objectives.'
            ],
            [
                'question' => 'What is the implementation timeline?',
                'answer' => 'Implementation timelines vary based on solution complexity. Simple solutions may take weeks while comprehensive infrastructure overhauls might take months. We provide detailed project plans with clear timelines during the planning phase.'
            ],
            [
                'question' => 'Do you provide post-implementation support?',
                'answer' => 'Yes, absolutely. We provide comprehensive post-implementation support including training, troubleshooting, optimization, and ongoing maintenance to ensure your solutions perform optimally.'
            ],
            [
                'question' => 'How scalable are your solutions?',
                'answer' => 'Our solutions are designed with scalability in mind. As your business grows, we can expand and upgrade solutions to accommodate increased demands without major system overhauls.'
            ]
        ];

        return view('pages.solutions', compact('blogs', 'faqs'));
    }
}
