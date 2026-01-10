<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'brand' => [
                'logo' => 'CODE[Z];',
                'name' => 'Zheus Leiandre Cajote',
                'title' => 'FOUNDER',
                'company' => 'CODEZ',
                'tagline' => 'Codez Graphics Design & Digital Solutions',
            ],
            'contact' => [
                'whatsapp' => '09456935658',
                'phone' => '09456935658',
                'email' => 'zheusleiandrecajote@gmail.com',
                'facebook' => 'https://www.facebook.com/YeboiiZhey',
            ],
            'stats' => [
                'projects' => '50+',
                'experience_it' => '3',
                'experience_design' => '7',
                'clients' => '100+',
            ],
            'techStack' => [
                ['name'=>'Flutter','percent'=>90],
                ['name'=>'Firebase','percent'=>80],
                ['name'=>'Laravel','percent'=>50],
                ['name'=>'MySQL','percent'=>60],
                ['name'=>'C','percent'=>60],
                ['name'=>'C++','percent'=>40],
                ['name'=>'Kotlin','percent'=>50],
                ['name'=>'Rest API','percent'=>75],
                ['name'=>'PHP','percent'=>90],
                ['name'=>'HTML','percent'=>90],
                ['name'=>'CSS','percent'=>80],
                ['name'=>'JavaScript','percent'=>50],
                ['name'=>'Java','percent'=>50],
                ['name'=>'Vue','percent'=>30],
                ['name'=>'React.js','percent'=>35],
            ],
            'designStack' => [
                ['name'=>'Adobe Illustrator','percent'=>90],
                ['name'=>'Adobe Photoshop','percent'=>60],
                ['name'=>'Canva','percent'=>100],
                ['name'=>'Framer','percent'=>50],
                ['name'=>'Figma','percent'=>60],
            ],
            'services' => [
                [
                    'icon' => '<i class="fas fa-code"></i>',
                    'title' => 'Web Development',
                    'description' => 'Building modern, responsive websites using the latest web technologies and frameworks.',
                ],
                [
                    'icon' => '<i class="fas fa-mobile-alt"></i>',
                    'title' => 'App Development',
                    'description' => 'Creating powerful mobile applications for iOS and Android platforms.',
                ],
                [
                    'icon' => '<i class="fas fa-laptop-code"></i>',
                    'title' => 'Software Development',
                    'description' => 'Custom software solutions tailored to your business needs.',
                ],
                [
                    'icon' => '<i class="fas fa-robot"></i>',
                    'title' => 'Automation',
                    'description' => 'Streamlining processes with intelligent automation solutions.',
                ],
                [
                    'icon' => '<i class="fas fa-database"></i>',
                    'title' => 'Data Solutions',
                    'description' => 'Transform your data into actionable insights and visualizations.',
                ],
                [
                    'icon' => '<i class="fas fa-cloud"></i>',
                    'title' => 'Cloud Service',
                    'description' => 'Scalable cloud infrastructure and deployment solutions.',
                ],
                [
                    'icon' => '<i class="fas fa-microchip"></i>',
                    'title' => 'IoT Solutions',
                    'description' => 'Design and deploy IoT systems: device integration, telemetry, and real-time monitoring.',
                ],
                [
                    'icon' => '<i class="fas fa-pencil-ruler"></i>',
                    'title' => 'UI UX Design',
                    'description' => 'Crafting intuitive and beautiful user experiences that convert.',
                ],
                [
                    'icon' => '<i class="fas fa-palette"></i>',
                    'title' => 'Graphics Design',
                    'description' => 'Eye-catching visual designs that elevate your brand identity.',
                ],
            ],
        ];

        return view('home', $data);
    }
}
