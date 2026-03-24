<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        return view('pages.home', [
            'pageTitle' => 'European full-cycle cosmetics manufacturing in Estonia',
            'pageDescription' => 'FITONORDIC LAB presents production capabilities, private label workflow, and contact information for future website pages.',
            'navigation' => $this->navigation(),
            'legalNavigation' => $this->legalNavigation(),
        ]);
    }

    public function show(string $page): View
    {
        $pages = $this->pages();

        abort_unless(array_key_exists($page, $pages), 404);

        return view('pages.content', [
            'page' => $pages[$page],
            'navigation' => $this->navigation(),
            'legalNavigation' => $this->legalNavigation(),
            'pageTitle' => $pages[$page]['title'],
            'pageDescription' => $pages[$page]['intro'],
        ]);
    }

    private function navigation(): array
    {
        return [
            ['label' => 'Home', 'route' => 'home'],
            ['label' => 'Production capabilities', 'route' => 'production-capabilities'],
            ['label' => 'Contract manufacturing', 'route' => 'contract-manufacturing'],
            ['label' => 'About', 'route' => 'about'],
            ['label' => 'Contacts', 'route' => 'contacts'],
        ];
    }

    private function legalNavigation(): array
    {
        return [
            ['label' => 'Privacy Policy', 'route' => 'privacy-policy'],
            ['label' => 'Cookie Policy', 'route' => 'cookie-policy'],
        ];
    }

    private function pages(): array
    {
        return [
            'production-capabilities' => [
                'eyebrow' => 'Production overview',
                'title' => 'Production capabilities',
                'intro' => 'A dedicated page for the lab, packaging area, warehouse, water treatment system, equipment, and real production visuals.',
                'sections' => [
                    [
                        'title' => 'Core proof points',
                        'items' => [
                            'Own laboratory for formulation and testing.',
                            'Packaging area, warehouse, and reverse osmosis system on site.',
                            'Modern production equipment, including the new LIANM machine.',
                        ],
                    ],
                    [
                        'title' => 'What this page should show',
                        'items' => [
                            'Real photos and videos of the laboratory, warehouse, and packaging area.',
                            'Short explanations of each production zone and why it matters for quality.',
                            'Clear evidence that production is handled in Estonia, not outsourced presentation-only.',
                        ],
                    ],
                ],
            ],
            'contract-manufacturing' => [
                'eyebrow' => 'Private label',
                'title' => 'Contract manufacturing / Private Label',
                'intro' => 'A service page that explains how FITONORDIC LAB works with clients from brief to finished product under the client brand.',
                'sections' => [
                    [
                        'title' => 'Suggested structure',
                        'items' => [
                            'Intro block about partnership format and EU manufacturing.',
                            'Step-by-step workflow from task setting to packaging and market preparation.',
                            'CTA for project discussion with direct contact details.',
                        ],
                    ],
                    [
                        'title' => 'Positioning note',
                        'items' => [
                            'Present the company as a manufacturing partner, not just a product catalog.',
                            'Avoid claims that FITONORDIC LAB manufactures dietary supplements or foods for the current version.',
                        ],
                    ],
                ],
            ],
            'about' => [
                'eyebrow' => 'Company profile',
                'title' => 'About FITONORDIC LAB',
                'intro' => 'A presentation page for brand positioning, mission, values, and the role of FITONORDIC LAB as a production partner.',
                'sections' => [
                    [
                        'title' => 'Main focus',
                        'items' => [
                            'Mission, philosophy, and production mindset.',
                            'Why the company is a trusted long-term partner for brands entering or scaling in the EU market.',
                            'A calm trust-building block about the strategic partnership with VITATEKA.',
                        ],
                    ],
                ],
            ],
            'contacts' => [
                'eyebrow' => 'Direct communication',
                'title' => 'Contacts',
                'intro' => 'A practical contact page with address, communication channels, and a future feedback form.',
                'sections' => [
                    [
                        'title' => 'What to include',
                        'items' => [
                            'Phone, email, business address, and work hours.',
                            'Lead form with privacy notice.',
                            'Short trust block reminding visitors about the Estonian production base and private label support.',
                        ],
                    ],
                ],
            ],
            'privacy-policy' => [
                'eyebrow' => 'Technical page',
                'title' => 'Privacy Policy',
                'intro' => 'A footer-only page required for contact forms and baseline legal transparency.',
                'sections' => [
                    [
                        'title' => 'Ready for legal copy',
                        'items' => [
                            'This page is scaffolded in Laravel and can now receive final policy text.',
                            'It should stay accessible from the footer rather than the main menu.',
                        ],
                    ],
                ],
            ],
            'cookie-policy' => [
                'eyebrow' => 'Technical page',
                'title' => 'Cookie Policy',
                'intro' => 'A footer-only page prepared for the future cookie banner and transparency text.',
                'sections' => [
                    [
                        'title' => 'Ready for legal copy',
                        'items' => [
                            'Use this page for cookie categories, purpose descriptions, and visitor choices.',
                            'It is scaffolded now so later banner logic has a destination page already in place.',
                        ],
                    ],
                ],
            ],
        ];
    }
}
