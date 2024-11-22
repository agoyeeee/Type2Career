<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JobRecommendation;

class JobRecommendationSeeder extends Seeder
{
    public function run()
    {
        $jobRecommendations = [
            // ISTJ
            ['mbti_type_id' => 1, 'job_title' => 'Accountant', 'job_description' => 'Responsible for financial records and compliance.'],
            ['mbti_type_id' => 1, 'job_title' => 'Auditor', 'job_description' => 'Ensure accuracy and integrity of financial statements.'],
            ['mbti_type_id' => 1, 'job_title' => 'Logistics Manager', 'job_description' => 'Manage supply chains and ensure timely delivery.'],
            ['mbti_type_id' => 1, 'job_title' => 'Civil Engineer', 'job_description' => 'Design and supervise construction projects.'],

            // ISFJ
            ['mbti_type_id' => 2, 'job_title' => 'Nurse', 'job_description' => 'Provide patient care and medical assistance.'],
            ['mbti_type_id' => 2, 'job_title' => 'Social Worker', 'job_description' => 'Support individuals and families in need.'],
            ['mbti_type_id' => 2, 'job_title' => 'Librarian', 'job_description' => 'Manage library resources and assist patrons.'],
            ['mbti_type_id' => 2, 'job_title' => 'Customer Service Representative', 'job_description' => 'Assist customers with inquiries and solutions.'],

            // INFJ
            ['mbti_type_id' => 3, 'job_title' => 'Counselor', 'job_description' => 'Help clients improve mental and emotional well-being.'],
            ['mbti_type_id' => 3, 'job_title' => 'Psychologist', 'job_description' => 'Study and treat mental health issues.'],
            ['mbti_type_id' => 3, 'job_title' => 'Writer', 'job_description' => 'Create compelling and meaningful written content.'],
            ['mbti_type_id' => 3, 'job_title' => 'Humanitarian Worker', 'job_description' => 'Address social issues and provide community support.'],

            // INTJ
            ['mbti_type_id' => 4, 'job_title' => 'Data Scientist', 'job_description' => 'Analyze data and provide actionable insights.'],
            ['mbti_type_id' => 4, 'job_title' => 'Software Architect', 'job_description' => 'Design and oversee software systems.'],
            ['mbti_type_id' => 4, 'job_title' => 'Strategic Planner', 'job_description' => 'Develop long-term business strategies.'],
            ['mbti_type_id' => 4, 'job_title' => 'Investment Banker', 'job_description' => 'Provide financial advice and investment services.'],

            // ISTP
            ['mbti_type_id' => 5, 'job_title' => 'Mechanical Engineer', 'job_description' => 'Design and maintain mechanical systems.'],
            ['mbti_type_id' => 5, 'job_title' => 'Pilot', 'job_description' => 'Operate and navigate aircraft.'],
            ['mbti_type_id' => 5, 'job_title' => 'Forensic Scientist', 'job_description' => 'Investigate evidence for criminal cases.'],
            ['mbti_type_id' => 5, 'job_title' => 'Carpenter', 'job_description' => 'Craft and repair wooden structures and furniture.'],

            // ISFP
            ['mbti_type_id' => 6, 'job_title' => 'Graphic Designer', 'job_description' => 'Create visual content for various platforms.'],
            ['mbti_type_id' => 6, 'job_title' => 'Chef', 'job_description' => 'Prepare and create innovative dishes.'],
            ['mbti_type_id' => 6, 'job_title' => 'Musician', 'job_description' => 'Compose and perform music.'],
            ['mbti_type_id' => 6, 'job_title' => 'Interior Designer', 'job_description' => 'Design aesthetically pleasing interior spaces.'],

            // INFP
            ['mbti_type_id' => 7, 'job_title' => 'Writer', 'job_description' => 'Express ideas and stories through writing.'],
            ['mbti_type_id' => 7, 'job_title' => 'Therapist', 'job_description' => 'Support clients through emotional challenges.'],
            ['mbti_type_id' => 7, 'job_title' => 'Art Teacher', 'job_description' => 'Inspire students through artistic expression.'],
            ['mbti_type_id' => 7, 'job_title' => 'Nonprofit Manager', 'job_description' => 'Lead organizations focused on social good.'],

            // INTP
            ['mbti_type_id' => 8, 'job_title' => 'Research Scientist', 'job_description' => 'Advance knowledge through scientific research.'],
            ['mbti_type_id' => 8, 'job_title' => 'Software Developer', 'job_description' => 'Develop innovative software solutions.'],
            ['mbti_type_id' => 8, 'job_title' => 'Philosopher', 'job_description' => 'Explore fundamental questions about existence.'],
            ['mbti_type_id' => 8, 'job_title' => 'Mathematician', 'job_description' => 'Solve complex problems through mathematical theories.'],

            // ESTP
            ['mbti_type_id' => 9, 'job_title' => 'Sales Representative', 'job_description' => 'Build client relationships and drive revenue.'],
            ['mbti_type_id' => 9, 'job_title' => 'Entrepreneur', 'job_description' => 'Start and manage successful business ventures.'],
            ['mbti_type_id' => 9, 'job_title' => 'Athlete', 'job_description' => 'Compete professionally in sports.'],
            ['mbti_type_id' => 9, 'job_title' => 'Event Coordinator', 'job_description' => 'Plan and execute large-scale events.'],

            // ESFP
            ['mbti_type_id' => 10, 'job_title' => 'Actor', 'job_description' => 'Perform roles in theater, film, or television.'],
            ['mbti_type_id' => 10, 'job_title' => 'Tour Guide', 'job_description' => 'Lead engaging tours for visitors.'],
            ['mbti_type_id' => 10, 'job_title' => 'Public Relations Specialist', 'job_description' => 'Manage public image and media relations.'],
            ['mbti_type_id' => 10, 'job_title' => 'Dancer', 'job_description' => 'Perform expressive and artistic dance routines.'],

            // ENFP
            ['mbti_type_id' => 11, 'job_title' => 'Marketing Specialist', 'job_description' => 'Develop creative marketing campaigns.'],
            ['mbti_type_id' => 11, 'job_title' => 'Journalist', 'job_description' => 'Investigate and report current events.'],
            ['mbti_type_id' => 11, 'job_title' => 'Life Coach', 'job_description' => 'Guide clients toward personal development.'],
            ['mbti_type_id' => 11, 'job_title' => 'Content Creator', 'job_description' => 'Produce and share engaging digital content.'],

            // ENTP
            ['mbti_type_id' => 12, 'job_title' => 'Entrepreneur', 'job_description' => 'Build and lead innovative startups.'],
            ['mbti_type_id' => 12, 'job_title' => 'Consultant', 'job_description' => 'Advise organizations on various challenges.'],
            ['mbti_type_id' => 12, 'job_title' => 'Advertising Executive', 'job_description' => 'Create impactful ad campaigns for brands.'],
            ['mbti_type_id' => 12, 'job_title' => 'Innovator', 'job_description' => 'Develop new products and technologies.'],

            // ESTJ
            ['mbti_type_id' => 13, 'job_title' => 'Operations Manager', 'job_description' => 'Ensure efficiency in organizational operations.'],
            ['mbti_type_id' => 13, 'job_title' => 'Police Officer', 'job_description' => 'Maintain public safety and enforce laws.'],
            ['mbti_type_id' => 13, 'job_title' => 'Judge', 'job_description' => 'Preside over legal proceedings.'],
            ['mbti_type_id' => 13, 'job_title' => 'Military Officer', 'job_description' => 'Lead and organize military operations.'],

            // ESFJ
            ['mbti_type_id' => 14, 'job_title' => 'Teacher', 'job_description' => 'Educate and inspire students.'],
            ['mbti_type_id' => 14, 'job_title' => 'Event Planner', 'job_description' => 'Coordinate and execute memorable events.'],
            ['mbti_type_id' => 14, 'job_title' => 'Healthcare Administrator', 'job_description' => 'Oversee healthcare operations and services.'],
            ['mbti_type_id' => 14, 'job_title' => 'Public Health Specialist', 'job_description' => 'Promote community health and wellness.'],

            // ENFJ
            ['mbti_type_id' => 15, 'job_title' => 'Human Resources Manager', 'job_description' => 'Develop workplace culture and employee satisfaction.'],
            ['mbti_type_id' => 15, 'job_title' => 'Motivational Speaker', 'job_description' => 'Inspire and empower audiences through speeches.'],
            ['mbti_type_id' => 15, 'job_title' => 'Diplomat', 'job_description' => 'Foster international relations and negotiations.'],
            ['mbti_type_id' => 15, 'job_title' => 'Nonprofit Director', 'job_description' => 'Lead initiatives for social impact.'],

            // ENTJ
            ['mbti_type_id' => 16, 'job_title' => 'CEO', 'job_description' => 'Lead organizations toward success and innovation.'],
            ['mbti_type_id' => 16, 'job_title' => 'Business Consultant', 'job_description' => 'Advise companies on strategic growth.'],
            ['mbti_type_id' => 16, 'job_title' => 'Lawyer', 'job_description' => 'Represent clients and handle legal cases.'],
            ['mbti_type_id' => 16, 'job_title' => 'Corporate Executive', 'job_description' => 'Manage high-level decision-making in corporations.'],
        ];

        foreach ($jobRecommendations as $recommendation) {
            JobRecommendation::create($recommendation);
        }
    }
}
