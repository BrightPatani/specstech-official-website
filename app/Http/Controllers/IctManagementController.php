<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class IctManagementController extends Controller
{
    public function index()
    {
        $blogs = Blog::where('published_at', '!=', null)
            ->orderBy('published_at', 'desc')
            ->get();

        $faqs = [
            [
                'question' => 'What is ICT Management?',
                'answer' => 'ICT Management refers to the comprehensive management of Information and Communication Technology resources within an organization. It encompasses planning, implementation, monitoring, and optimization of all technology infrastructure and systems.'
            ],
            [
                'question' => 'Why is ICT Management important?',
                'answer' => 'ICT Management is crucial because it ensures that technology infrastructure supports business objectives, reduces operational costs, minimizes downtime, enhances security, and enables scalability as your business grows.'
            ],
            [
                'question' => 'What services are included in ICT Management?',
                'answer' => 'Our ICT Management services include network monitoring, system administration, help desk support, security management, infrastructure maintenance, vendor management, and strategic technology planning.'
            ],
            [
                'question' => 'How can ICT Management reduce costs?',
                'answer' => 'Through proactive maintenance, efficient resource allocation, preventing costly downtime, optimizing licenses and subscriptions, and implementing best practices that reduce waste and improve operational efficiency.'
            ],
            [
                'question' => 'How do you ensure system uptime?',
                'answer' => 'We ensure system uptime through 24/7 monitoring, proactive maintenance, redundancy planning, rapid incident response, and regular backups. Our SLA guarantees provide peace of mind for your critical operations.'
            ]
        ];

        return view('pages.ictmgmt', compact('blogs', 'faqs'));
    }
}
