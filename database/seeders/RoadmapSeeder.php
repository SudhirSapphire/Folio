<?php

namespace Database\Seeders;

use App\Models\Roadmap;
use Illuminate\Database\Seeder;

class RoadmapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Truncate existing roadmaps so the seeder is safe to run repeatedly
        Roadmap::truncate();

        $roadmaps = [
            [
                'phase' => 'Now',
                'title' => 'PHP, MySQL & Frontend Essentials',
                'description' => 'Relational database design with MySQL, responsive frontend styling with HTML5, CSS3, ES6 JavaScript, Bootstrap, and deep vanilla PHP architectural patterns.',
                'tags' => ['PHP', 'MySQL', 'Frontend'],
                'order_weight' => 1
            ],
            [
                'phase' => 'Now',
                'title' => 'Quick Transport & TILD Systems',
                'description' => 'Building and maintaining custom logistics/bidding web portals like Quick Transport and fluid admin panel interfaces in TILD.',
                'tags' => ['PHP', 'Logistics', 'TILD'],
                'order_weight' => 2
            ],
            [
                'phase' => 'Now',
                'title' => 'Village on Web & SaaS Multi-DBs',
                'description' => 'Scaling multi-tenant database architectures to dynamically isolate records and script automated seeding workflows for local municipal systems.',
                'tags' => ['SaaS', 'Multi-Tenant', 'MySQL'],
                'order_weight' => 3
            ],
            [
                'phase' => 'Now',
                'title' => 'Advanced Laravel Enterprise Stack',
                'description' => 'Developing high-performance backend pipelines, queue workers, media upload endpoints with chunking, and modern Inertia.js web views.',
                'tags' => ['Laravel', 'REST API', 'Inertia.js'],
                'order_weight' => 4
            ],
            [
                'phase' => 'Now',
                'title' => 'LaraSafe Automated Backup Suite',
                'description' => 'Actively scaling LaraSafe, an open-source automated project backup package supporting S3, Backblaze B2, and Wasabi target endpoints.',
                'tags' => ['LaraSafe', 'Open Source', 'S3'],
                'order_weight' => 5
            ],
            [
                'phase' => 'Now',
                'title' => 'Nimbus VPS Control Panel',
                'description' => 'Developing and actively scaling Nimbus, a secure self-hosted VPS control panel orchestrating domains, Nginx, Let\'s Encrypt certificates, databases, and Supervisor cron jobs.',
                'tags' => ['Nimbus', 'VPS Panel', 'DevOps'],
                'order_weight' => 6
            ],
            [
                'phase' => 'Now',
                'title' => 'CloudSaviour Mirroring System',
                'description' => 'Designing CloudSaviour, a resilient multi-cloud syncing tool engineered to automate, verify, and mirror disaster-recovery assets across distributed cloud providers.',
                'tags' => ['CloudSaviour', 'Sync Engine', 'Cloud'],
                'order_weight' => 7
            ],
            [
                'phase' => 'Now',
                'title' => 'AWS Cloud Infrastructure',
                'description' => 'Deploying, managing, and scaling environments on AWS (EC2, S3, RDS, IAM) with optimized cost control, strict VPC rules, and CloudWatch monitor logs.',
                'tags' => ['AWS', 'EC2', 'Cloud'],
                'order_weight' => 8
            ],
            [
                'phase' => 'Now',
                'title' => 'Docker Containerization',
                'description' => 'Orchestrating containerized local development templates, staging setups, and Nginx/PHP-FPM containers for rapid application scaling.',
                'tags' => ['Docker', 'Nginx', 'Containers'],
                'order_weight' => 9
            ],
            [
                'phase' => 'Next',
                'title' => 'Terraform Infrastructure as Code',
                'description' => 'Gearing up to implement declarative cloud infrastructure provisioning using Terraform to manage and track AWS resources.',
                'tags' => ['Terraform', 'IaC', 'DevOps'],
                'order_weight' => 10
            ],
            [
                'phase' => 'Next',
                'title' => 'Kubernetes Orchestration',
                'description' => 'Mastering container scheduling, microservice networks, ingress load balancing, and resilient auto-scaling pods inside K8s environments.',
                'tags' => ['Kubernetes', 'K8s', 'Orchestration'],
                'order_weight' => 11
            ],
            [
                'phase' => 'Future',
                'title' => 'High-Availability Multi-Cloud SRE',
                'description' => 'Architecting zero-downtime, geo-distributed multi-cloud infrastructure networks utilizing automated health checks and master-slave database replication.',
                'tags' => ['SRE', 'Multi-Cloud', 'Architecture'],
                'order_weight' => 12
            ]
        ];

        foreach ($roadmaps as $road) {
            Roadmap::create($road);
        }
    }
}
