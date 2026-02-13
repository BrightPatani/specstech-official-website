<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class KnowledgeTransferController extends Controller
{
    public function index()
    {
        $blogs = Blog::where('published_at', '!=', null)
            ->orderBy('published_at', 'desc')
            ->get();

        $faqs = [
            [
                'question' => 'What is Knowledge Transfer?',
                'answer' => 'Knowledge Transfer is a comprehensive training program where we teach your team the skills and expertise needed to effectively manage and maintain your ICT infrastructure, reducing dependency on external support.'
            ],
            [
                'question' => 'What training programs do you offer?',
                'answer' => 'We offer programs in network administration, system management, cybersecurity, cloud technologies, helpdesk operations, database management, and other ICT disciplines customized to your team\'s needs.'
            ],
            [
                'question' => 'How long are the training programs?',
                'answer' => 'Training duration ranges from one-week intensive courses to multi-month programs depending on complexity. We offer flexible scheduling including full-time, part-time, and weekend classes.'
            ],
            [
                'question' => 'Do you provide certifications?',
                'answer' => 'Yes, we provide completion certificates for all training programs. We also help prepare your team for industry-recognized certifications like CompTIA, Cisco, and Microsoft certifications.'
            ],
            [
                'question' => 'Is hands-on training included?',
                'answer' => 'Absolutely. All our programs include practical, hands-on training in lab environments. Participants work with real equipment and scenarios to gain practical experience applicable to their work.'
            ]
        ];

        return view('pages.knowledge', compact('blogs', 'faqs'));
    }
}
