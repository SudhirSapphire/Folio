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
                'phase' => 'Past',
                'title' => 'PHP, MySQL & Frontend Essentials',
                'description' => 'Relational database design with MySQL, responsive frontend styling with HTML5, CSS3, ES6 JavaScript, Bootstrap, and deep vanilla PHP architectural patterns.',
                'tags' => ['PHP', 'MySQL', 'Frontend'],
                'order_weight' => 1
            ],
            [
                'phase' => 'Past',
                'title' => 'Quick Transport Logistics',
                'description' => 'Developed a logistics platform allowing transport users to post goods, bid on hires, and manage bookings via a custom admin dashboard.',
                'tags' => ['PHP', 'Logistics', 'Bootstrap'],
                'order_weight' => 2
            ],
            [
                'phase' => 'Past',
                'title' => 'TILD Admin Panel',
                'description' => 'Designed interactive user interfaces and fluid administrative dashboard components with clean, responsive frontends.',
                'tags' => ['PHP', 'TILD', 'MySQL'],
                'order_weight' => 3
            ],
            [
                'phase' => 'Past',
                'title' => 'Village on Web (SaaS)',
                'description' => 'Developed a SaaS municipal database tool, implementing automated multi-database provisioning scripts to achieve secure tenant isolation.',
                'tags' => ['SaaS', 'Multi-Tenant', 'Databases'],
                'order_weight' => 4
            ],
            [
                'phase' => 'Past',
                'title' => 'Enterprise Laravel Stack',
                'description' => 'Engineered robust Laravel applications incorporating complex queue scheduling, cache drivers, custom models, and modular Inertia.js structures.',
                'tags' => ['Laravel', 'Eloquent', 'MVC'],
                'order_weight' => 5
            ],
            [
                'phase' => 'Past',
                'title' => 'LaraSafe Backup Engine',
                'description' => 'Built and launched LaraSafe, an open-source backup orchestration library supporting file-system and DB archiving to multiple cloud endpoints.',
                'tags' => ['LaraSafe', 'Open Source', 'S3'],
                'order_weight' => 6
            ],
            [
                'phase' => 'Now',
                'title' => 'Nimbus VPS Control Panel',
                'description' => 'Developing and actively scaling Nimbus, a secure self-hosted VPS control panel orchestrating domains, Nginx, Let\'s Encrypt certificates, databases, and Supervisor cron jobs.',
                'tags' => ['Nimbus', 'VPS Panel', 'DevOps'],
                'order_weight' => 7
            ],
            [
                'phase' => 'Now',
                'title' => 'CloudSaviour Mirroring System',
                'description' => 'Designing CloudSaviour, a resilient multi-cloud syncing tool engineered to automate, verify, and mirror disaster-recovery assets across distributed cloud providers.',
                'tags' => ['CloudSaviour', 'Sync Engine', 'Cloud'],
                'order_weight' => 8
            ],
            [
                'phase' => 'Now',
                'title' => 'AWS Cloud Infrastructure',
                'description' => 'Deploying, managing, and scaling environments on AWS (EC2, S3, RDS, IAM) with optimized cost control, strict VPC rules, and CloudWatch monitor logs.',
                'tags' => ['AWS', 'EC2', 'Cloud'],
                'order_weight' => 9
            ],
            [
                'phase' => 'Now',
                'title' => 'Docker Containerization',
                'description' => 'Orchestrating containerized local development templates, staging setups, and Nginx/PHP-FPM containers for rapid application scaling.',
                'tags' => ['Docker', 'Nginx', 'Containers'],
                'order_weight' => 10
            ],
            [
                'phase' => 'Next',
                'title' => 'Terraform Infrastructure as Code',
                'description' => 'Gearing up to implement declarative cloud infrastructure provisioning using Terraform to manage and track AWS resources.',
                'tags' => ['Terraform', 'IaC', 'DevOps'],
                'order_weight' => 11
            ],
            [
                'phase' => 'Next',
                'title' => 'Kubernetes Orchestration',
                'description' => 'Mastering container scheduling, microservice networks, ingress load balancing, and resilient auto-scaling pods inside K8s environments.',
                'tags' => ['Kubernetes', 'K8s', 'Orchestration'],
                'order_weight' => 12
            ],
            [
                'phase' => 'Future',
                'title' => 'High-Availability Multi-Cloud SRE',
                'description' => 'Architecting zero-downtime, geo-distributed multi-cloud infrastructure networks utilizing automated health checks and master-slave database replication.',
                'tags' => ['SRE', 'Multi-Cloud', 'Architecture'],
                'order_weight' => 13
            ]
        ];

        foreach ($roadmaps as $road) {
            Roadmap::create($road);
        }
    }
}
