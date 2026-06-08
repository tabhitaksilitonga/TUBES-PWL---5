<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JobsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('jobs')->delete();
        
        \DB::table('jobs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'poster_id' => 49,
                'title' => 'Senior Product Designer',
                'company_name' => 'Pika',
                'location' => 'Palo Alto, CA',
                'job_type' => 'Full-time',
                'description' => 'About the Role
At Pika we’re building the future of AI video and social media. Our products give people new ways to create, remix and share ideas, and we’re looking for a designer who can help shape that future.
We’re looking for a
Senior Product Designer
to partner with the team in defining what great AI video experiences look and feel like. This role is not just about designing a beautiful app (though you care about this too). It’s about designing tools and interactions that feel intuitive, inspire creativity, and align with people’s emotional and practical needs.
What You’ll Do
Lead design from concept to polished execution across mobile and web.
Develop product strategies, explore interaction patterns, and push bold ideas into prototypes and shipped products.
Partner closely with product, engineering, research and marketing to bring clarity to ambiguous problems and build features that make sense.
Use storytelling, prototypes, and clear rationale to communicate your design intent.
Balance systems-thinking with craft, obsessing over user flows, creating consistent internal logic, while also paying attention to fonts, type scales, consistent color palettes, spacing and animation.
Design within and beyond existing design systems, knowing when to follow patterns and when to invent new ones.
Advocate for real people and users of the app and understanding that design is not about you as a designer, or even the app, but about the humans on the other side.
Qualifications
4-8 years of experience in product design (UI/UX) with multiple shipped mobile apps.
A portfolio of shipped products where you personally led the UX and visual design, showing both your product thinking and your craft.
Comfort with Apple’s Human Interface Guidelines and system design thinking.
Ability to quickly visualize, prototype and iterate on ideas.
Expertise in creating a consistent internal logic that maps to the users’ mental models.
Expertise collaborating across disciplines and debating ideas with reason, not ego.
Bonus Points
Background in designing creation tools, social media platforms, or games.
A degree in design or related field (not required)
Design-engineering, or vibe-coding high fidelity prototypes and animations.
Based in or around Palo Alto, CA
About Pika
At Pika, we’re crafting a future where video creation is seamless, intuitive, and universally accessible. Our vision is set on a world where videos transcend entertainment, serving as a canvas for everyone\'s unique expression. Harnessing AI\'s transformative power, we aim to dismantle the technical barriers that have traditionally made video production an exclusive field. It’s about building the best technology that upholds the power of creativity—not just within our products but as an integral part of our culture.
We’re a small team of energetic, smart and curious individuals. We value efficiency, collaboration, and creativity. We seek new team members who bring sharp intellect, a strong work ethic, and the ambition to make an impact. Here, you\'ll find significant room for career advancement, supported by a culture that nurtures both individual and collective development.
Our headquarters is based in Palo Alto, CA, and we work from the office 5 days a week.',
                'description_html' => '
<h2><strong>About the Role</strong></h2><p>At Pika we’re building the future of AI video and social media. Our products give people new ways to create, remix and share ideas, and we’re looking for a designer who can help shape that future.</p><p></p><p>We’re looking for a<strong> Senior Product Designer </strong>to partner with the team in defining what great AI video experiences look and feel like. This role is not just about designing a beautiful app (though you care about this too). It’s about designing tools and interactions that feel intuitive, inspire creativity, and align with people’s emotional and practical needs.</p><p></p><h2><strong>What You’ll Do</strong></h2><ul><li><p>Lead design from concept to polished execution across mobile and web.</p></li><li><p>Develop product strategies, explore interaction patterns, and push bold ideas into prototypes and shipped products.</p></li><li><p>Partner closely with product, engineering, research and marketing to bring clarity to ambiguous problems and build features that make sense.</p></li><li><p>Use storytelling, prototypes, and clear rationale to communicate your design intent.</p></li><li><p>Balance systems-thinking with craft, obsessing over user flows, creating consistent internal logic, while also paying attention to fonts, type scales, consistent color palettes, spacing and animation.</p></li><li><p>Design within and beyond existing design systems, knowing when to follow patterns and when to invent new ones.</p></li><li><p>Advocate for real people and users of the app and understanding that design is not about you as a designer, or even the app, but about the humans on the other side.</p></li></ul><p></p><h2><strong>Qualifications</strong></h2><ul><li><p>4-8 years of experience in product design (UI/UX) with multiple shipped mobile apps.</p></li><li><p>A portfolio of shipped products where you personally led the UX and visual design, showing both your product thinking and your craft.</p></li><li><p>Comfort with Apple’s Human Interface Guidelines and system design thinking.</p></li><li><p>Ability to quickly visualize, prototype and iterate on ideas.</p></li><li><p>Expertise in creating a consistent internal logic that maps to the users’ mental models.</p></li><li><p>Expertise collaborating across disciplines and debating ideas with reason, not ego.</p></li></ul><p></p><h2><strong>Bonus Points</strong></h2><ul><li><p>Background in designing creation tools, social media platforms, or games.</p></li><li><p>A degree in design or related field (not required)</p></li><li><p>Design-engineering, or vibe-coding high fidelity prototypes and animations.</p></li><li><p>Based in or around Palo Alto, CA</p></li></ul><p></p><h2><strong>About Pika</strong></h2><p>At Pika, we’re crafting a future where video creation is seamless, intuitive, and universally accessible. Our vision is set on a world where videos transcend entertainment, serving as a canvas for everyone\'s unique expression. Harnessing AI\'s transformative power, we aim to dismantle the technical barriers that have traditionally made video production an exclusive field. It’s about building the best technology that upholds the power of creativity—not just within our products but as an integral part of our culture.</p><p>We’re a small team of energetic, smart and curious individuals. We value efficiency, collaboration, and creativity. We seek new team members who bring sharp intellect, a strong work ethic, and the ambition to make an impact. Here, you\'ll find significant room for career advancement, supported by a culture that nurtures both individual and collective development.</p><p>Our headquarters is based in Palo Alto, CA, and we work from the office 5 days a week.</p>
',
                'apply_url' => 'https://jobs.ashbyhq.com/pika/cc4dffe4-2cad-4287-a28b-b875ee35b541',
                'created_at' => '2026-05-21 22:14:07',
                'updated_at' => '2026-05-21 22:14:07',
                'company_logo' => 'https://cdn.dribbble.com/userupload/44948427/file/897dc80d6a821cc7e79ac1d77b4c3b12.jpg?resize=24x24',
                'website' => 'https://jobs.ashbyhq.com/pika/cc4dffe4-2cad-4287-a28b-b875ee35b541',
            ),
            1 => 
            array (
                'id' => 2,
                'poster_id' => 6,
                'title' => 'Remote Brand Identity & Graphic Designer',
                'company_name' => 'day3',
                'location' => 'Remote',
                'job_type' => 'Full-time',
                'description' => 'We\'re on the lookout for passionate creatives to join our team.
We\'re a premier agency based in NYC specializing in building state-of-the-art brands and website for our clients
As a Brand Identity Designer, you\'ll play a key role in developing visual identities for our diverse client base, which includes industries such as healthcare, real estate, finance, and food. Working closely with our Creative Director and clients, you’ll turn vision into visually captivating designs that elevate brand identity across various platforms.
Your responsibilities include defining requirements, generating unique concepts, collaborating with team members, transforming ideas into visual representations, and ultimately crafting designs that captivate audiences.
Skill sets should include
Proven graphic designing experience (UI/UX a plus)
Ability to work methodically and meet deadlines
Robust understanding of and ability to work within our brand guidelines and voice, ensuring consistency and alignment across all communication and creative outputs.
Ability to stay current with social media trends and bring new ideas to the table.
Solid grasp of design principles, including color theory, composition, typography, and seasonal design trends.
Proficient in:
Adobe Photoshop
Adobe Illustrator
Adobe InDesign
What\'s in it for you? Picture yourself as a pivotal player in our creative orchestra, where every note and every stroke of genius contributes to our symphony of success and where you will have the support of other team members and leadership to continue growing as a creative.
Gear up for fun and exciting tasks! You\'ll be an integral part of our creative ensemble, where every voice matters in shaping our projects for maximum impact. Expect a diverse array of daily tasks spanning logo design, brand design, packaging, print, typography, product design, flyers, brochures, brand guides, business cards, posters, and much more!
If you\'re ready to unleash your artistic flair and be part of a collaborative, forward-thinking team, then we want to hear from you!
https://forms.clickup.com/90151314029/f/2kypzrkd-8235/O71RLQQ6R80V83TMJ6
(Please do not spam our email or website form or book a meeting on our founder\'s calendly as it won’t increase your chances of employment. Just fill out the form, and we will get in touch to schedule an interview if we see a potential fit.)',
                    'description_html' => '
<h1><strong>We\'re on the lookout for passionate creatives to join our team.</strong></h1><h2><strong>We\'re a premier agency based in NYC specializing in building state-of-the-art brands and website for our clients</strong></h2><p>As a Brand Identity Designer, you\'ll play a key role in developing visual identities for our diverse client base, which includes industries such as healthcare, real estate, finance, and food. Working closely with our Creative Director and clients, you’ll turn vision into visually captivating designs that elevate brand identity across various platforms.</p><p>Your responsibilities include defining requirements, generating unique concepts, collaborating with team members, transforming ideas into visual representations, and ultimately crafting designs that captivate audiences.</p><p><strong>Skill sets should include </strong></p><ul><li><p>Proven graphic designing experience (UI/UX a plus)</p></li><li><p>Ability to work methodically and meet deadlines</p></li><li><p>Robust understanding of and ability to work within our brand guidelines and voice, ensuring consistency and alignment across all communication and creative outputs.</p></li><li><p>Ability to stay current with social media trends and bring new ideas to the table.</p></li><li><p>Solid grasp of design principles, including color theory, composition, typography, and seasonal design trends.</p></li></ul><p><strong>Proficient in:</strong></p><ul><li><p>Adobe Photoshop</p></li><li><p>Adobe Illustrator</p></li><li><p>Adobe InDesign</p></li></ul><p></p><p>What\'s in it for you? Picture yourself as a pivotal player in our creative orchestra, where every note and every stroke of genius contributes to our symphony of success and where you will have the support of other team members and leadership to continue growing as a creative. </p><p>Gear up for fun and exciting tasks! You\'ll be an integral part of our creative ensemble, where every voice matters in shaping our projects for maximum impact. Expect a diverse array of daily tasks spanning logo design, brand design, packaging, print, typography, product design, flyers, brochures, brand guides, business cards, posters, and much more!</p><p>If you\'re ready to unleash your artistic flair and be part of a collaborative, forward-thinking team, then we want to hear from you! </p><p><a href="https://forms.clickup.com/90151314029/f/2kypzrkd-8235/O71RLQQ6R80V83TMJ6">https://forms.clickup.com/90151314029/f/2kypzrkd-8235/O71RLQQ6R80V83TMJ6</a></p><p>(Please do not spam our email or website form or book a meeting on our founder\'s calendly as it won’t increase your chances of employment. Just fill out the form, and we will get in touch to schedule an interview if we see a potential fit.)</p>
',
                    'apply_url' => 'https://forms.clickup.com/90151314029/f/2kypzrkd-8235/O71RLQQ6R80V83TMJ6',
                    'created_at' => '2026-05-21 22:14:09',
                    'updated_at' => '2026-05-21 22:14:09',
                    'company_logo' => 'https://cdn.dribbble.com/userupload/46548570/file/b93f788b46f884eb7032d35a69d9033c.jpeg?resize=24x24',
                    'website' => 'https://forms.clickup.com/90151314029/f/2kypzrkd-8235/O71RLQQ6R80V83TMJ6',
                ),
                2 => 
                array (
                    'id' => 3,
                    'poster_id' => 96,
                    'title' => 'Senior Product Designer',
                    'company_name' => 'Pika',
                    'location' => 'Palo Alto, CA',
                    'job_type' => 'Full-time',
                    'description' => 'About the Role
At Pika we’re building the future of AI video and social media. Our products give people new ways to create, remix and share ideas, and we’re looking for a designer who can help shape that future.
We’re looking for a
Senior Product Designer
to partner with the team in defining what great AI video experiences look and feel like. This role is not just about designing a beautiful app (though you care about this too). It’s about designing tools and interactions that feel intuitive, inspire creativity, and align with people’s emotional and practical needs.
What You’ll Do
Lead design from concept to polished execution across mobile and web.
Develop product strategies, explore interaction patterns, and push bold ideas into prototypes and shipped products.
Partner closely with product, engineering, research and marketing to bring clarity to ambiguous problems and build features that make sense.
Use storytelling, prototypes, and clear rationale to communicate your design intent.
Balance systems-thinking with craft, obsessing over user flows, creating consistent internal logic, while also paying attention to fonts, type scales, consistent color palettes, spacing and animation.
Design within and beyond existing design systems, knowing when to follow patterns and when to invent new ones.
Advocate for real people and users of the app and understanding that design is not about you as a designer, or even the app, but about the humans on the other side.
Qualifications
4-8 years of experience in product design (UI/UX) with multiple shipped mobile apps.
A portfolio of shipped products where you personally led the UX and visual design, showing both your product thinking and your craft.
Comfort with Apple’s Human Interface Guidelines and system design thinking.
Ability to quickly visualize, prototype and iterate on ideas.
Expertise in creating a consistent internal logic that maps to the users’ mental models.
Expertise collaborating across disciplines and debating ideas with reason, not ego.
Bonus Points
Background in designing creation tools, social media platforms, or games.
A degree in design or related field (not required)
Design-engineering, or vibe-coding high fidelity prototypes and animations.
Based in or around Palo Alto, CA
About Pika
At Pika, we’re crafting a future where video creation is seamless, intuitive, and universally accessible. Our vision is set on a world where videos transcend entertainment, serving as a canvas for everyone\'s unique expression. Harnessing AI\'s transformative power, we aim to dismantle the technical barriers that have traditionally made video production an exclusive field. It’s about building the best technology that upholds the power of creativity—not just within our products but as an integral part of our culture.
We’re a small team of energetic, smart and curious individuals. We value efficiency, collaboration, and creativity. We seek new team members who bring sharp intellect, a strong work ethic, and the ambition to make an impact. Here, you\'ll find significant room for career advancement, supported by a culture that nurtures both individual and collective development.
Our headquarters is based in Palo Alto, CA, and we work from the office 5 days a week.',
                    'description_html' => '
<h2><strong>About the Role</strong></h2><p>At Pika we’re building the future of AI video and social media. Our products give people new ways to create, remix and share ideas, and we’re looking for a designer who can help shape that future.</p><p></p><p>We’re looking for a<strong> Senior Product Designer </strong>to partner with the team in defining what great AI video experiences look and feel like. This role is not just about designing a beautiful app (though you care about this too). It’s about designing tools and interactions that feel intuitive, inspire creativity, and align with people’s emotional and practical needs.</p><p></p><h2><strong>What You’ll Do</strong></h2><ul><li><p>Lead design from concept to polished execution across mobile and web.</p></li><li><p>Develop product strategies, explore interaction patterns, and push bold ideas into prototypes and shipped products.</p></li><li><p>Partner closely with product, engineering, research and marketing to bring clarity to ambiguous problems and build features that make sense.</p></li><li><p>Use storytelling, prototypes, and clear rationale to communicate your design intent.</p></li><li><p>Balance systems-thinking with craft, obsessing over user flows, creating consistent internal logic, while also paying attention to fonts, type scales, consistent color palettes, spacing and animation.</p></li><li><p>Design within and beyond existing design systems, knowing when to follow patterns and when to invent new ones.</p></li><li><p>Advocate for real people and users of the app and understanding that design is not about you as a designer, or even the app, but about the humans on the other side.</p></li></ul><p></p><h2><strong>Qualifications</strong></h2><ul><li><p>4-8 years of experience in product design (UI/UX) with multiple shipped mobile apps.</p></li><li><p>A portfolio of shipped products where you personally led the UX and visual design, showing both your product thinking and your craft.</p></li><li><p>Comfort with Apple’s Human Interface Guidelines and system design thinking.</p></li><li><p>Ability to quickly visualize, prototype and iterate on ideas.</p></li><li><p>Expertise in creating a consistent internal logic that maps to the users’ mental models.</p></li><li><p>Expertise collaborating across disciplines and debating ideas with reason, not ego.</p></li></ul><p></p><h2><strong>Bonus Points</strong></h2><ul><li><p>Background in designing creation tools, social media platforms, or games.</p></li><li><p>A degree in design or related field (not required)</p></li><li><p>Design-engineering, or vibe-coding high fidelity prototypes and animations.</p></li><li><p>Based in or around Palo Alto, CA</p></li></ul><p></p><h2><strong>About Pika</strong></h2><p>At Pika, we’re crafting a future where video creation is seamless, intuitive, and universally accessible. Our vision is set on a world where videos transcend entertainment, serving as a canvas for everyone\'s unique expression. Harnessing AI\'s transformative power, we aim to dismantle the technical barriers that have traditionally made video production an exclusive field. It’s about building the best technology that upholds the power of creativity—not just within our products but as an integral part of our culture.</p><p>We’re a small team of energetic, smart and curious individuals. We value efficiency, collaboration, and creativity. We seek new team members who bring sharp intellect, a strong work ethic, and the ambition to make an impact. Here, you\'ll find significant room for career advancement, supported by a culture that nurtures both individual and collective development.</p><p>Our headquarters is based in Palo Alto, CA, and we work from the office 5 days a week.</p>
',
                    'apply_url' => 'https://jobs.ashbyhq.com/pika/cc4dffe4-2cad-4287-a28b-b875ee35b541',
                    'created_at' => '2026-05-21 22:14:12',
                    'updated_at' => '2026-05-21 22:14:12',
                    'company_logo' => 'https://cdn.dribbble.com/userupload/44948451/file/9e9bc0c4419956b36bf84747ac04c4ce.jpg?resize=24x24',
                    'website' => 'https://jobs.ashbyhq.com/pika/cc4dffe4-2cad-4287-a28b-b875ee35b541',
                ),
                3 => 
                array (
                    'id' => 4,
                    'poster_id' => 60,
                    'title' => 'UX/UI Design Engineer',
                    'company_name' => 'Mabyduck',
                    'location' => 'London, United Kingdom',
                    'job_type' => 'Full-time',
                    'description' => 'If you like to work at the intersection of design & code, we are looking for you! Specifically, we are looking for an experienced design engineer with the following profile:
📄
4+ years of experience
in frontend development, product design, or UI/UX
👥 2+ years working on a collaborative team
✨ You have a strong eye for design and know how the to create
modern, polished interfaces
🔍 You care deeply about
pixel-perfect user experiences
🧑‍💻 You know your way around
CSS and JavaScript
You are comfortable implementing components directly in the codebase
💡You will
own and evolve Mabyduck‘s design language
, building design systems and ensuring consistency across our apps
🔨 You
value consistency and simplicity
over specific tools or frameworks. Our current tech stack includes:
Typescript
htmx
Bootstrap
Docker
Selenium
Python
Django
🇬🇧 You have the right to work in the UK and are able to work from our London or Bristol office at least 1 day/week
🦆
Mabyduck
is an early-stage company and a platform for evaluating AI-generated content. Startups, academics, and large enterprises rely on our services to measure the quality of audio, images, video, and beyond. We design studies in which paid participants provide feedback on content, and develop technology to make that process as easy and efficient as possible. We’re a small team of researchers and engineers who value low ego and high agency.
If interested, please send your portfolio, GitHub account, or projects you worked on to
hello@mabyduck.com
. Particularly useful would be before & after examples of any design refreshes you may have done, or components you have implemented.
Pay:
£70k - £85k + equity, depending on experience',
                    'description_html' => '
<p>If you like to work at the intersection of design &amp; code, we are looking for you! Specifically, we are looking for an experienced design engineer with the following profile:</p><ul><li><p>📄 <strong>4+ years of experience</strong> in frontend development, product design, or UI/UX</p></li><li><p>👥 2+ years working on a collaborative team</p></li><li><p>✨ You have a strong eye for design and know how the to create <strong>modern, polished interfaces</strong></p></li><li><p>🔍 You care deeply about <strong>pixel-perfect user experiences</strong></p></li><li><p>🧑‍💻 You know your way around <strong>CSS and JavaScript</strong></p><ul><li><p>You are comfortable implementing components directly in the codebase</p></li></ul></li><li><p>💡You will <strong>own and evolve Mabyduck‘s design language</strong>, building design systems and ensuring consistency across our apps</p></li><li><p>🔨 You <strong>value consistency and simplicity</strong> over specific tools or frameworks. Our current tech stack includes:</p><ul><li><p>Typescript</p></li><li><p>htmx</p></li><li><p>Bootstrap</p></li><li><p>Docker</p></li><li><p>Selenium</p></li><li><p>Python</p></li><li><p>Django</p></li></ul></li><li><p>🇬🇧 You have the right to work in the UK and are able to work from our London or Bristol office at least 1 day/week</p></li></ul><p>🦆 <strong>Mabyduck</strong> is an early-stage company and a platform for evaluating AI-generated content. Startups, academics, and large enterprises rely on our services to measure the quality of audio, images, video, and beyond. We design studies in which paid participants provide feedback on content, and develop technology to make that process as easy and efficient as possible. We’re a small team of researchers and engineers who value low ego and high agency.</p><p><em>If interested, please send your portfolio, GitHub account, or projects you worked on to </em><a href="mailto:hello@mabyduck.com"><em>hello@mabyduck.com</em></a><em>. Particularly useful would be before &amp; after examples of any design refreshes you may have done, or components you have implemented.</em></p><p>Pay:</p><p>£70k - £85k + equity, depending on experience</p>
',
                    'apply_url' => 'https://www.mabyduck.com/',
                    'created_at' => '2026-05-21 22:14:16',
                    'updated_at' => '2026-05-21 22:14:16',
                    'company_logo' => 'https://cdn.dribbble.com/userupload/47793328/file/73ec4af389c73ac288cb165ea9866b35.png?resize=24x24',
                    'website' => 'https://www.mabyduck.com/',
                ),
                4 => 
                array (
                    'id' => 5,
                    'poster_id' => 26,
                    'title' => 'UX/UI Design Engineer',
                    'company_name' => 'Mabyduck',
                    'location' => 'London, United Kingdom',
                    'job_type' => 'Full-time',
                    'description' => 'If you like to work at the intersection of design & code, we are looking for you! Specifically, we are looking for an experienced design engineer with the following profile:
📄
4+ years of experience
in frontend development, product design, or UI/UX
👥 2+ years working on a collaborative team
✨ You have a strong eye for design and know how the to create
modern, polished interfaces
🔍 You care deeply about
pixel-perfect user experiences
🧑‍💻 You know your way around
CSS and JavaScript
You are comfortable implementing components directly in the codebase
💡You will
own and evolve Mabyduck‘s design language
, building design systems and ensuring consistency across our apps
🔨 You
value consistency and simplicity
over specific tools or frameworks. Our current tech stack includes:
Typescript
htmx
Bootstrap
Docker
Selenium
Python
Django
🇬🇧 You have the right to work in the UK and are able to work from our London or Bristol office at least 1 day/week
🦆
Mabyduck
is an early-stage company and a platform for evaluating AI-generated content. Startups, academics, and large enterprises rely on our services to measure the quality of audio, images, video, and beyond. We design studies in which paid participants provide feedback on content, and develop technology to make that process as easy and efficient as possible. We’re a small team of researchers and engineers who value low ego and high agency.
If interested, please send your portfolio, GitHub account, or projects you worked on to
hello@mabyduck.com
. Particularly useful would be before & after examples of any design refreshes you may have done, or components you have implemented.
Pay:
£70k - £85k + equity, depending on experience',
                    'description_html' => '
<p>If you like to work at the intersection of design &amp; code, we are looking for you! Specifically, we are looking for an experienced design engineer with the following profile:</p><ul><li><p>📄 <strong>4+ years of experience</strong> in frontend development, product design, or UI/UX</p></li><li><p>👥 2+ years working on a collaborative team</p></li><li><p>✨ You have a strong eye for design and know how the to create <strong>modern, polished interfaces</strong></p></li><li><p>🔍 You care deeply about <strong>pixel-perfect user experiences</strong></p></li><li><p>🧑‍💻 You know your way around <strong>CSS and JavaScript</strong></p><ul><li><p>You are comfortable implementing components directly in the codebase</p></li></ul></li><li><p>💡You will <strong>own and evolve Mabyduck‘s design language</strong>, building design systems and ensuring consistency across our apps</p></li><li><p>🔨 You <strong>value consistency and simplicity</strong> over specific tools or frameworks. Our current tech stack includes:</p><ul><li><p>Typescript</p></li><li><p>htmx</p></li><li><p>Bootstrap</p></li><li><p>Docker</p></li><li><p>Selenium</p></li><li><p>Python</p></li><li><p>Django</p></li></ul></li><li><p>🇬🇧 You have the right to work in the UK and are able to work from our London or Bristol office at least 1 day/week</p></li></ul><p>🦆 <strong>Mabyduck</strong> is an early-stage company and a platform for evaluating AI-generated content. Startups, academics, and large enterprises rely on our services to measure the quality of audio, images, video, and beyond. We design studies in which paid participants provide feedback on content, and develop technology to make that process as easy and efficient as possible. We’re a small team of researchers and engineers who value low ego and high agency.</p><p><em>If interested, please send your portfolio, GitHub account, or projects you worked on to </em><a href="mailto:hello@mabyduck.com"><em>hello@mabyduck.com</em></a><em>. Particularly useful would be before &amp; after examples of any design refreshes you may have done, or components you have implemented.</em></p><p>Pay:</p><p>£70k - £85k + equity, depending on experience</p>
',
                    'apply_url' => 'www.mabyduck.com',
                    'created_at' => '2026-05-21 22:14:19',
                    'updated_at' => '2026-05-21 22:14:19',
                    'company_logo' => 'https://cdn.dribbble.com/userupload/47793325/file/4baea6e4095f37b3345cdb720e9ac053.png?resize=24x24',
                    'website' => 'www.mabyduck.com',
                ),
                5 => 
                array (
                    'id' => 6,
                    'poster_id' => 73,
                    'title' => 'Senior Product Designer',
                    'company_name' => 'Peregrine',
                    'location' => 'San Francisco, CA',
                    'job_type' => 'Full-time',
                    'description' => 'Backed by leading investors from Silicon Valley, Peregrine supports public safety agencies across the country — from Los Angeles to Louisville to Atlanta — empowering public servants to improve operations and make better decisions in the moments that matter. Today, our technology is used by customers to serve more than 30 million Americans. We’re motivated to build technologies by partnering with our customers; we listen to their needs, learn from their experiences, and develop effective solutions to help them achieve transformational outcomes. Together, we’re creating safer communities, protecting privacy and civil liberties, and helping everyone in America thrive.
We are a team of public service entrepreneurs who are passionate about solving hard problems. We trust and help each other, and love diving into challenges together. We believe empathy, curiosity, integrity, courage, and excellent execution are key to building impactful software. If mission-focused work is your north star, come build with us. We’re just getting started.
About the Role
As one of the first Product Designers at Peregrine, you’ll help envision and amplify the digital future of public safety. Understanding our user needs is core to this role so you’ll have ample opportunities to see how Peregrine is used in the field. You’ll collaborate with talented Designers and Engineers to define the digital renaissance of public safety and delight users who seldom use outstanding software—transforming complex, data-dense workflows into intuitive solutions.
We’re looking for a deeply curious and inventive Product Designer to shape end-to-end experiences within a vast data platform—from research, to thinking through solutions, to owning the craft and finish of every detail of the product.
If this sounds exciting to you, please apply!
About You
Own broadly defined, high-impact design initiatives to deliver a well-executed and highly polished product that will delight users
Excellent communication and collaboration skills to work well across Design, Engineering and Business Development teams, defining scope and prioritization to ensure high-quality outcomes
Participate in design critiques with the Design and Leadership teams
Partner with leadership to define the product strategy and craft a compelling narrative that inspires team members toward a unified outcome
Contribute to growing the Design discipline in a company that values exceptional user experience—this includes contributing to our design systems and asset library
We support a flexible hybrid environment that balances in-person collaboration and remote work
What We Look For
10+ years of experience* driving the design of software products while maintaining a relentless focus on the user experience
Exceptional interaction design, visual design and design thinking—with the ability to articulate your thought process
Passion for distilling complex problems into intuitive workflows while maintaining the quality and polish of the product
Ability to excel in a fast-moving, and sometimes unstructured environment
Familiarity with design tools such as Figma, Sketch and Origami
Curiosity and willingness to learn and grow from a team of high-performing builders
Strong portfolio of design work that conveys an ability to ship successful products
Located in San Francisco and open to working in office
* We\'ve learned that people hesitate to apply without quantifiable years of experience. However, what’s most important to us is the kind of experiences you’ve had and the skills you’ve developed along the way. Have well over 10 years of experience? That\'s great! Have fewer than 10 years, but feel you meet the other requirements? That\'s ok too! Please apply.
Salary Range: $176,000 - $240,000 Annually + Benefits + Equity (if applicable) + Bonus (if applicable)
Pursuant to the San Francisco Fair Chance Ordinance, we will consider for employment qualified applicants with arrest and conviction records.
Actual compensation is influenced by a wide array of factors including but not limited to skill set, level of experience, certifications or licenses, and specific work location. Information on the benefits offered is
here
.
Peregrine Technologies is committed to creating an inclusive environment for all employees. We celebrate diversity and are a proud equal opportunity employer. All qualified applicants will receive consideration for employment without regard to race, color, religion, gender, gender identity or expression, sexual orientation, national origin, genetics, disability, age, or veteran status.',
                    'description_html' => '
<p>Backed by leading investors from Silicon Valley, Peregrine supports public safety agencies across the country — from Los Angeles to Louisville to Atlanta — empowering public servants to improve operations and make better decisions in the moments that matter. Today, our technology is used by customers to serve more than 30 million Americans. We’re motivated to build technologies by partnering with our customers; we listen to their needs, learn from their experiences, and develop effective solutions to help them achieve transformational outcomes. Together, we’re creating safer communities, protecting privacy and civil liberties, and helping everyone in America thrive.</p><p>We are a team of public service entrepreneurs who are passionate about solving hard problems. We trust and help each other, and love diving into challenges together. We believe empathy, curiosity, integrity, courage, and excellent execution are key to building impactful software. If mission-focused work is your north star, come build with us. We’re just getting started.</p><h2>About the Role</h2><p>As one of the first Product Designers at Peregrine, you’ll help envision and amplify the digital future of public safety. Understanding our user needs is core to this role so you’ll have ample opportunities to see how Peregrine is used in the field. You’ll collaborate with talented Designers and Engineers to define the digital renaissance of public safety and delight users who seldom use outstanding software—transforming complex, data-dense workflows into intuitive solutions.</p><p>We’re looking for a deeply curious and inventive Product Designer to shape end-to-end experiences within a vast data platform—from research, to thinking through solutions, to owning the craft and finish of every detail of the product.</p><p>If this sounds exciting to you, please apply!</p><p><strong>About You</strong></p><ul><li><p>Own broadly defined, high-impact design initiatives to deliver a well-executed and highly polished product that will delight users</p></li><li><p>Excellent communication and collaboration skills to work well across Design, Engineering and Business Development teams, defining scope and prioritization to ensure high-quality outcomes</p></li><li><p>Participate in design critiques with the Design and Leadership teams</p></li><li><p>Partner with leadership to define the product strategy and craft a compelling narrative that inspires team members toward a unified outcome</p></li><li><p>Contribute to growing the Design discipline in a company that values exceptional user experience—this includes contributing to our design systems and asset library</p></li><li><p>We support a flexible hybrid environment that balances in-person collaboration and remote work</p></li></ul><p><strong>What We Look For</strong></p><ul><li><p>10+ years of experience* driving the design of software products while maintaining a relentless focus on the user experience</p></li><li><p>Exceptional interaction design, visual design and design thinking—with the ability to articulate your thought process</p></li><li><p>Passion for distilling complex problems into intuitive workflows while maintaining the quality and polish of the product</p></li><li><p>Ability to excel in a fast-moving, and sometimes unstructured environment</p></li><li><p>Familiarity with design tools such as Figma, Sketch and Origami</p></li><li><p>Curiosity and willingness to learn and grow from a team of high-performing builders</p></li><li><p>Strong portfolio of design work that conveys an ability to ship successful products</p></li><li><p>Located in San Francisco and open to working in office</p></li></ul><p>* We\'ve learned that people hesitate to apply without quantifiable years of experience. However, what’s most important to us is the kind of experiences you’ve had and the skills you’ve developed along the way. Have well over 10 years of experience? That\'s great! Have fewer than 10 years, but feel you meet the other requirements? That\'s ok too! Please apply.</p><p><em>Salary Range: $176,000 - $240,000 Annually + Benefits + Equity (if applicable) + Bonus (if applicable)</em></p><p><em>Pursuant to the San Francisco Fair Chance Ordinance, we will consider for employment qualified applicants with arrest and conviction records.</em></p><p><em>Actual compensation is influenced by a wide array of factors including but not limited to skill set, level of experience, certifications or licenses, and specific work location. Information on the benefits offered is </em><a href="https://peregrine.io/careers/"><em>here</em></a><em>.</em></p><p><em>Peregrine Technologies is committed to creating an inclusive environment for all employees. We celebrate diversity and are a proud equal opportunity employer. All qualified applicants will receive consideration for employment without regard to race, color, religion, gender, gender identity or expression, sexual orientation, national origin, genetics, disability, age, or veteran status.</em></p>
',
                    'apply_url' => 'https://dribbble.com/jobs/282785-Senior-Product-Designer/apply_now',
                    'created_at' => '2026-05-21 22:14:23',
                    'updated_at' => '2026-05-21 22:14:23',
                    'company_logo' => 'https://cdn.dribbble.com/userupload/43057834/file/original-89b5a1513f78f8624cddd3413fe47556.png?resize=24x24',
                    'website' => 'https://dribbble.com/jobs/282785-Senior-Product-Designer/apply_now',
                ),
                6 => 
                array (
                    'id' => 7,
                    'poster_id' => 7,
                    'title' => 'Graphic Designer',
                    'company_name' => 'American Traffic Safety Services',
                    'location' => 'Fredericksburg, VA',
                    'job_type' => 'Full-time',
                    'description' => 'ROLE AND RESPONSIBILITIES
Under the supervision of the Director of Marketing and Communications, the Graphic Designer is responsible for creating high-quality visual designs across all ATSSA platforms and channels, including digital, print, video, social media, web, and event materials. This role serves as the department’s primary design expert and brand steward, ensuring visual consistency, creativity, and innovation across all initiatives. The position emphasizes creative execution, staying current with design trends, and leveraging emerging technologies, including AI tools, to improve design workflows. The Graphic Designer also provides backup support for trade shows and website-related design needs as required.
Key responsibilities:
Design & Creative Development:
Create layouts and formats for printed publications, including case studies, catalogs, and other assigned Serve as the primary graphic designer for ATSSA across print, digital, social media, video, and web assets.
Create layouts, graphics, and visual assets for publications, marketing collateral, promotional campaigns, and internal communications.
Design trade show and event materials, including signage, booth graphics, on-site visual assets, and branded giveaways.
Develop, maintain, and manage branded templates (e.g., PowerPoint, Canva, digital ads, social graphics) to ensure brand consistency.
Support website updates and design needs in coordination with the MarCom team and external partners.
Design and source creative concepts for trade show giveaways and branded items.
Provide backup design and on-site support for trade shows as needed.
Research, Innovation & Trends
Conduct ongoing research into graphic design trends, tools, and best practices across marketing, communications, and events.
Stay current on emerging technologies and AI-powered design applications and recommend opportunities for integration into workflows.
Proactively suggest creative approaches to enhance visual storytelling, engagement, and brand presence.
Brand Stewardship & Asset Management
Uphold and protect the ATSSA brand by ensuring consistent visual identity across all materials.
Organize, maintain, and update the marketing and communications library of artwork and digital assets.
Collaborate with internal teams to align visual design with organizational goals and messaging.
Collaboration & Support
Work closely with MarCom team members to support campaigns and initiatives while maintaining a strong focus on design execution.
QUALIFICATIONS AND EDUCATION REQUIREMENTS
Education and Experience - Bachelor’s degree in graphic design, marketing, or a related field, plus a minimum of three years of relevant marketing and design experience. A combination of education and relevant experience (5+ years) may be accepted in lieu of a bachelor’s degree.
Skills and Knowledge - A strong portfolio demonstrating graphic design expertise across digital, print, and multimedia platforms using current design best practices is essential, along with expert proficiency in Adobe Creative Suite and the ability to quickly learn new design tools and software. The role requires experience designing for events, exhibits, trade shows, and large-format applications, as well as a working knowledge of web, video, and social media design standards. Familiarity with AI-powered design tools and an interest in emerging technologies are important, paired with strong attention to detail, production accuracy, and brand consistency. Candidates should be able to translate concepts and content into compelling visual storytelling and demonstrate proven project management skills, including managing multiple design projects simultaneously within shared timelines. Experience coordinating with printers, fabricators, and external vendors is needed, along with a collaborative and adaptable work style in a fast-paced environment serving diverse internal stakeholders. Proficiency in Microsoft Office products and digital collaboration tools such as Microsoft Teams is required, as is experience supporting marketing campaigns and integrated communications. Familiarity with brand-system development and design governance is preferred, and association or nonprofit experience is a plus.
Travel – Limited, travel to ATSSA meetings and tradeshows as assigned.
Required - Link to portfolio/body of work.
The American Traffic Safety Services Association is an Equal Opportunity Employer that does not discriminate on the basis of actual or perceived race, creed, color, religion, alienage or national origin, ancestry, citizenship status, age, disability or handicap, sex, marital status, veteran status, sexual orientation, genetic information, arrest record, or any other characteristic protected by applicable federal, state or local laws.',
                    'description_html' => '
<p>ROLE AND RESPONSIBILITIES</p><p>Under the supervision of the Director of Marketing and Communications, the Graphic Designer is responsible for creating high-quality visual designs across all ATSSA platforms and channels, including digital, print, video, social media, web, and event materials. This role serves as the department’s primary design expert and brand steward, ensuring visual consistency, creativity, and innovation across all initiatives. The position emphasizes creative execution, staying current with design trends, and leveraging emerging technologies, including AI tools, to improve design workflows. The Graphic Designer also provides backup support for trade shows and website-related design needs as required.</p><p></p><p><strong>Key responsibilities:</strong></p><p></p><p><strong>Design &amp; Creative Development:</strong></p><ul><li><p>Create layouts and formats for printed publications, including case studies, catalogs, and other assigned Serve as the primary graphic designer for ATSSA across print, digital, social media, video, and web assets.</p></li><li><p>Create layouts, graphics, and visual assets for publications, marketing collateral, promotional campaigns, and internal communications.</p></li><li><p>Design trade show and event materials, including signage, booth graphics, on-site visual assets, and branded giveaways.</p></li><li><p>Develop, maintain, and manage branded templates (e.g., PowerPoint, Canva, digital ads, social graphics) to ensure brand consistency.</p></li><li><p>Support website updates and design needs in coordination with the MarCom team and external partners.</p></li><li><p>Design and source creative concepts for trade show giveaways and branded items.</p></li><li><p>Provide backup design and on-site support for trade shows as needed.</p></li></ul><p></p><p><strong>Research, Innovation &amp; Trends</strong></p><ul><li><p>Conduct ongoing research into graphic design trends, tools, and best practices across marketing, communications, and events.</p></li><li><p>Stay current on emerging technologies and AI-powered design applications and recommend opportunities for integration into workflows.</p></li><li><p>Proactively suggest creative approaches to enhance visual storytelling, engagement, and brand presence.</p></li></ul><p></p><p><strong>Brand Stewardship &amp; Asset Management</strong></p><ul><li><p>Uphold and protect the ATSSA brand by ensuring consistent visual identity across all materials.</p></li><li><p>Organize, maintain, and update the marketing and communications library of artwork and digital assets.</p></li><li><p>Collaborate with internal teams to align visual design with organizational goals and messaging.</p></li></ul><p></p><p><strong>Collaboration &amp; Support</strong></p><ul><li><p>Work closely with MarCom team members to support campaigns and initiatives while maintaining a strong focus on design execution.</p></li></ul><p></p><p>QUALIFICATIONS AND EDUCATION REQUIREMENTS</p><p>Education and Experience - Bachelor’s degree in graphic design, marketing, or a related field, plus a minimum of three years of relevant marketing and design experience. A combination of education and relevant experience (5+ years) may be accepted in lieu of a bachelor’s degree.</p><p></p><p>Skills and Knowledge - A strong portfolio demonstrating graphic design expertise across digital, print, and multimedia platforms using current design best practices is essential, along with expert proficiency in Adobe Creative Suite and the ability to quickly learn new design tools and software. The role requires experience designing for events, exhibits, trade shows, and large-format applications, as well as a working knowledge of web, video, and social media design standards. Familiarity with AI-powered design tools and an interest in emerging technologies are important, paired with strong attention to detail, production accuracy, and brand consistency. Candidates should be able to translate concepts and content into compelling visual storytelling and demonstrate proven project management skills, including managing multiple design projects simultaneously within shared timelines. Experience coordinating with printers, fabricators, and external vendors is needed, along with a collaborative and adaptable work style in a fast-paced environment serving diverse internal stakeholders. Proficiency in Microsoft Office products and digital collaboration tools such as Microsoft Teams is required, as is experience supporting marketing campaigns and integrated communications. Familiarity with brand-system development and design governance is preferred, and association or nonprofit experience is a plus.</p><p></p><p>Travel – Limited, travel to ATSSA meetings and tradeshows as assigned. </p><p></p><p>Required - Link to portfolio/body of work.</p><p></p><p></p><p>The American Traffic Safety Services Association is an Equal Opportunity Employer that does not discriminate on the basis of actual or perceived race, creed, color, religion, alienage or national origin, ancestry, citizenship status, age, disability or handicap, sex, marital status, veteran status, sexual orientation, genetic information, arrest record, or any other characteristic protected by applicable federal, state or local laws. </p><p></p>
',
                    'apply_url' => 'https://atssa.bamboohr.com/careers',
                    'created_at' => '2026-05-21 22:14:26',
                    'updated_at' => '2026-05-21 22:14:26',
                    'company_logo' => 'https://cdn.dribbble.com/userupload/47770921/file/c4e59974145102c0f859cb104bc0b3dd.jpg?resize=24x24',
                    'website' => 'https://atssa.bamboohr.com/careers',
                ),
                7 => 
                array (
                    'id' => 8,
                    'poster_id' => 92,
                    'title' => 'Principal UX Designer',
                    'company_name' => 'the Cirqle',
                    'location' => 'Amsterdam, Netherlands',
                    'job_type' => 'Full-time',
                    'description' => 'About The Cirqle
The Cirqle is the AI-native platform that helps consumer brands turn creator content into scalable performance advertising. With access to 10 million+ creators, years of creator marketing ROAS performance data, and deep integrations with Meta, TikTok, YouTube, and Shopify, we give performance marketing teams the tools to predict, scale, and prove the impact of creator-driven ads.
Trusted by leading e-commerce brands across the US and Europe, we sit at the intersection of creator economy, paid media, and AI. We\'re not another creator marketing tool focused on vanity metrics, we\'re built for measurable revenue attribution and always-on creator programs.
We\'re a small, high-performing team that punches well above its weight. We ship fast, think in outcomes, and believe that perfect is the enemy of shipped. Our engineering-driven culture values autonomy, experimentation, and psychological safety. We\'re scaling rapidly and need someone who can make our story as strong externally as it is internally.
About the role
We are hiring a Lead Product Designer to take ownership of design across the platform. This role covers both sides of the product: the brand-facing tools used to set up and manage campaigns, and the creator-facing app used to apply for, produce, and submit content. The Lead Product Designer reports to the CEO and works closely with the engineering team and the Chief of Staff.
Who you are
As the first in house designer of the Cirqle, you are key to expanding our product and its vision. You love taking ownership of large initiatives and shipping great user experiences. You are comfortable working in ambiguous settings and refining the requirements of a project with minimal guidance. You are the voice of your users and understand their challenges and what can relieve their pains. You are a strategic thinker and like solving for the root cause of an issue, which you are comfortable discovering through user interviews, data collection and analysis, and client conversations. You ideate regularly an on your products and do not wait for a green light to build new things. You want to build amazing products. You are a great collaborative thinker and enjoy discussing your ideas in an open, inviting setting. You are at the cutting edge of your craft.
Responsibilities
Lead the design of all active product initiatives.
Maintain and evolve the design system and the visual identity of the product across all surfaces.
Collaborate with the engineering team throughout implementation, including specification of work in Linear and review of changes before release.
Participate in client meetings where product decisions are being shaped, particularly around new features and AI-driven flows. Translate client and commercial requirements into product specifications.
Evaluate, select, and integrate AI tools used in the design and design-to-code process. The current toolchain includes Figma, Stitch, and Cursor.
Contribute to the long-term product strategy alongside the CEO and the Chief of Staff.
Requirements
Significant experience as a product designer in B2B SaaS, ideally including time as the first or one of the first designers at a startup. A portfolio demonstrating shipped work on multi-tenant software products.
Expert-level proficiency in Figma and demonstrated experience building or substantially evolving a design system.
Working knowledge of AI tools used in design and front-end development, with practical experience integrating them into a design workflow.
Strong written communication, including the ability to specify product requirements in a form engineers can build from directly.
Comfort working in client-facing settings and translating commercial input into product decisions.
Compensation and conditions
Competitive salary and negotiable equity based on experience. Standard Dutch employment terms, including 25 days of paid leave and the 8% holiday allowance.
The role is based in our Amsterdam office. We are not considering fully remote candidates for this position.
Application process
Please submit a portfolio along with a short note explaining your interest in the role. A formal cover letter is not required.',
                    'description_html' => '
<p><strong>About The Cirqle</strong></p><p>The Cirqle is the AI-native platform that helps consumer brands turn creator content into scalable performance advertising. With access to 10 million+ creators, years of creator marketing ROAS performance data, and deep integrations with Meta, TikTok, YouTube, and Shopify, we give performance marketing teams the tools to predict, scale, and prove the impact of creator-driven ads.</p><p>Trusted by leading e-commerce brands across the US and Europe, we sit at the intersection of creator economy, paid media, and AI. We\'re not another creator marketing tool focused on vanity metrics, we\'re built for measurable revenue attribution and always-on creator programs.</p><p>We\'re a small, high-performing team that punches well above its weight. We ship fast, think in outcomes, and believe that perfect is the enemy of shipped. Our engineering-driven culture values autonomy, experimentation, and psychological safety. We\'re scaling rapidly and need someone who can make our story as strong externally as it is internally.</p><p></p><p><strong>About the role</strong></p><p>We are hiring a Lead Product Designer to take ownership of design across the platform. This role covers both sides of the product: the brand-facing tools used to set up and manage campaigns, and the creator-facing app used to apply for, produce, and submit content. The Lead Product Designer reports to the CEO and works closely with the engineering team and the Chief of Staff.</p><p></p><p><strong>Who you are</strong></p><p></p><p>As the first in house designer of the Cirqle, you are key to expanding our product and its vision. You love taking ownership of large initiatives and shipping great user experiences. You are comfortable working in ambiguous settings and refining the requirements of a project with minimal guidance. You are the voice of your users and understand their challenges and what can relieve their pains. You are a strategic thinker and like solving for the root cause of an issue, which you are comfortable discovering through user interviews, data collection and analysis, and client conversations. You ideate regularly an on your products and do not wait for a green light to build new things. You want to build amazing products. You are a great collaborative thinker and enjoy discussing your ideas in an open, inviting setting. You are at the cutting edge of your craft.</p><p></p><p><strong>Responsibilities</strong></p><ul><li><p>Lead the design of all active product initiatives.</p></li><li><p>Maintain and evolve the design system and the visual identity of the product across all surfaces.</p></li><li><p>Collaborate with the engineering team throughout implementation, including specification of work in Linear and review of changes before release.</p></li><li><p>Participate in client meetings where product decisions are being shaped, particularly around new features and AI-driven flows. Translate client and commercial requirements into product specifications.</p></li><li><p>Evaluate, select, and integrate AI tools used in the design and design-to-code process. The current toolchain includes Figma, Stitch, and Cursor.</p></li><li><p>Contribute to the long-term product strategy alongside the CEO and the Chief of Staff.</p><p></p></li></ul><p><strong>Requirements</strong></p><ul><li><p>Significant experience as a product designer in B2B SaaS, ideally including time as the first or one of the first designers at a startup. A portfolio demonstrating shipped work on multi-tenant software products.</p></li><li><p>Expert-level proficiency in Figma and demonstrated experience building or substantially evolving a design system.</p></li><li><p>Working knowledge of AI tools used in design and front-end development, with practical experience integrating them into a design workflow.</p></li><li><p>Strong written communication, including the ability to specify product requirements in a form engineers can build from directly.</p></li><li><p>Comfort working in client-facing settings and translating commercial input into product decisions.</p></li></ul><p></p><p><strong>Compensation and conditions</strong></p><p>Competitive salary and negotiable equity based on experience. Standard Dutch employment terms, including 25 days of paid leave and the 8% holiday allowance.</p><p></p><p>The role is based in our Amsterdam office. We are not considering fully remote candidates for this position.</p><p></p><p>Application process</p><p></p><p>Please submit a portfolio along with a short note explaining your interest in the role. A formal cover letter is not required.</p>
',
                    'apply_url' => 'https://www.linkedin.com/jobs/view/4416244582/',
                    'created_at' => '2026-05-21 22:14:30',
                    'updated_at' => '2026-05-21 22:14:30',
                    'company_logo' => 'https://cdn.dribbble.com/userupload/47769061/file/2d46d13df8574c42d892254cd07bbf11.png?resize=24x24',
                    'website' => 'https://www.linkedin.com/jobs/view/4416244582/',
                ),
                8 => 
                array (
                    'id' => 9,
                    'poster_id' => 85,
                    'title' => 'Presentation Designer - Freelance',
                    'company_name' => 'Contrast UX',
                    'location' => 'Remote',
                    'job_type' => 'Freelance',
                    'description' => 'About Contrast UX
Contrast UX is a design agency focused on creating exceptional digital products that are clear, effective, and grounded in real user and business needs. We blend strong design fundamentals with strategic thinking to deliver experiences that resonate with users and drive measurable impact.
We partner with a wide range of clients, from ambitious startups to established enterprises, working closely with product and engineering teams to turn complex ideas into scalable, well crafted products. Collaboration is central to how we work. We operate as true partners, not vendors, embedding ourselves in teams to deeply understand context, constraints, and goals.
We actively push our practice forward by integrating AI into both how we design and what we design. For us, innovation is not about novelty. It is about using the right tools to think more clearly, move faster, and create smarter, more human centered digital experiences that exceed expectations.
The Role
We are looking for a freelance Presentations Designer to support one of our major clients across high-stakes business communication and storytelling. This is not a general design role. We need someone who specializes in turning complex information into compelling, executive-ready presentations, pitch decks, and data narratives.
The right person for this role has a sharp eye for layout, hierarchy, and visual communication, and knows how to make dense information feel effortless to absorb. You will work directly with client stakeholders, translating strategy, data, and messaging into presentation assets that land with clarity and confidence.
This role requires active use of AI tools as part of your daily workflow. We expect you to use AI to accelerate research synthesis, visual ideation, copy refinement, and template generation, not as a shortcut, but as a way to work smarter and deliver higher quality faster.
What You Will Do
Design polished, executive-level presentations for internal leadership, board meetings, client-facing proposals, and marketing events
Translate complex data, strategy documents, and briefing notes into clear, visually compelling slide narratives
Create and maintain a consistent presentation slide library for the client, including templates, master layouts, and reusable components
Collaborate directly with senior stakeholders to understand messaging goals, audience expectations, and communication tone
Iterate rapidly on feedback, managing multiple versions and priorities under tight deadlines without losing quality
Use AI tools actively to accelerate content synthesis, layout ideation, copy sharpening, and template creation
Ensure all presentation work is fully on-brand, pixel-perfect, and ready for high-stakes delivery
Support ad hoc presentation needs across departments including sales, product, marketing, and executive communications
What We Are Looking For
3+ years of focused experience in presentation design, with a portfolio that demonstrates executive-level, high-stakes presentation work
Expert proficiency in PowerPoint and Google Slides, including master slide creation, animation, and complex layout design
Strong proficiency in Figma for visual asset production and template creation
Proven ability to simplify complex information and data into clear, digestible, and visually engaging narratives
Mandatory hands-on experience using AI tools as a core part of your creative workflow, including generating visual assets, illustrations, and imagery, as well as copy refinement, research synthesis, and template creation
Exceptional typography, grid, and visual hierarchy skills with an obsessive attention to detail and polish
Strong communication skills in English, both written and verbal, with comfort presenting your design decisions to senior stakeholders
Ability to manage your own time, work independently in a remote setup, and handle feedback across multiple stakeholders and workstreams
Experience working within established brand systems and maintaining strict visual consistency at scale
Data visualization skills, including chart design, infographics, and the ability to make numbers look as good as the words around them, are a strong plus
What We Offer
A flexible freelance engagement embedded within a major client organization, with the stability of ongoing work
The opportunity to own presentation design end to end, with direct access to senior stakeholders and meaningful creative influence
A dynamic, fast-moving environment where design quality is taken seriously and your work will be seen at the highest levels of the organization
Close collaboration with the Contrast UX team, including guidance, feedback, and support from experienced senior designers
Exposure to diverse projects and industries through our broader client portfolio, with opportunities to expand the engagement over time
To apply, please send your CV and a portfolio that includes clear examples of executive presentation work. Applications without a portfolio demonstrating presentation design will not be considered.',
                    'description_html' => '
<h2><strong>About Contrast UX</strong></h2><p>Contrast UX is a design agency focused on creating exceptional digital products that are clear, effective, and grounded in real user and business needs. We blend strong design fundamentals with strategic thinking to deliver experiences that resonate with users and drive measurable impact.</p><p>We partner with a wide range of clients, from ambitious startups to established enterprises, working closely with product and engineering teams to turn complex ideas into scalable, well crafted products. Collaboration is central to how we work. We operate as true partners, not vendors, embedding ourselves in teams to deeply understand context, constraints, and goals.</p><p>We actively push our practice forward by integrating AI into both how we design and what we design. For us, innovation is not about novelty. It is about using the right tools to think more clearly, move faster, and create smarter, more human centered digital experiences that exceed expectations.</p><h2><strong>The Role</strong></h2><p>We are looking for a freelance Presentations Designer to support one of our major clients across high-stakes business communication and storytelling. This is not a general design role. We need someone who specializes in turning complex information into compelling, executive-ready presentations, pitch decks, and data narratives.</p><p>The right person for this role has a sharp eye for layout, hierarchy, and visual communication, and knows how to make dense information feel effortless to absorb. You will work directly with client stakeholders, translating strategy, data, and messaging into presentation assets that land with clarity and confidence.</p><p>This role requires active use of AI tools as part of your daily workflow. We expect you to use AI to accelerate research synthesis, visual ideation, copy refinement, and template generation, not as a shortcut, but as a way to work smarter and deliver higher quality faster.</p><h2><strong>What You Will Do</strong></h2><ul><li><p>Design polished, executive-level presentations for internal leadership, board meetings, client-facing proposals, and marketing events</p></li><li><p>Translate complex data, strategy documents, and briefing notes into clear, visually compelling slide narratives</p></li><li><p>Create and maintain a consistent presentation slide library for the client, including templates, master layouts, and reusable components</p></li><li><p>Collaborate directly with senior stakeholders to understand messaging goals, audience expectations, and communication tone</p></li><li><p>Iterate rapidly on feedback, managing multiple versions and priorities under tight deadlines without losing quality</p></li><li><p>Use AI tools actively to accelerate content synthesis, layout ideation, copy sharpening, and template creation</p></li><li><p>Ensure all presentation work is fully on-brand, pixel-perfect, and ready for high-stakes delivery</p></li><li><p>Support ad hoc presentation needs across departments including sales, product, marketing, and executive communications</p></li></ul><h2><strong>What We Are Looking For</strong></h2><ul><li><p>3+ years of focused experience in presentation design, with a portfolio that demonstrates executive-level, high-stakes presentation work</p></li><li><p>Expert proficiency in PowerPoint and Google Slides, including master slide creation, animation, and complex layout design</p></li><li><p>Strong proficiency in Figma for visual asset production and template creation</p></li><li><p>Proven ability to simplify complex information and data into clear, digestible, and visually engaging narratives</p></li><li><p>Mandatory hands-on experience using AI tools as a core part of your creative workflow, including generating visual assets, illustrations, and imagery, as well as copy refinement, research synthesis, and template creation</p></li><li><p>Exceptional typography, grid, and visual hierarchy skills with an obsessive attention to detail and polish</p></li><li><p>Strong communication skills in English, both written and verbal, with comfort presenting your design decisions to senior stakeholders</p></li><li><p>Ability to manage your own time, work independently in a remote setup, and handle feedback across multiple stakeholders and workstreams</p></li><li><p>Experience working within established brand systems and maintaining strict visual consistency at scale</p></li><li><p>Data visualization skills, including chart design, infographics, and the ability to make numbers look as good as the words around them, are a strong plus</p></li></ul><h2><strong>What We Offer</strong></h2><ul><li><p>A flexible freelance engagement embedded within a major client organization, with the stability of ongoing work</p></li><li><p>The opportunity to own presentation design end to end, with direct access to senior stakeholders and meaningful creative influence</p></li><li><p>A dynamic, fast-moving environment where design quality is taken seriously and your work will be seen at the highest levels of the organization</p></li><li><p>Close collaboration with the Contrast UX team, including guidance, feedback, and support from experienced senior designers</p></li><li><p>Exposure to diverse projects and industries through our broader client portfolio, with opportunities to expand the engagement over time</p></li></ul><p></p><p></p><p>To apply, please send your CV and a portfolio that includes clear examples of executive presentation work. Applications without a portfolio demonstrating presentation design will not be considered.</p>
',
                    'apply_url' => 'https://forms.monday.com/forms/13fb5f52e801aa0999965f2866bd0990?r=euc1',
                    'created_at' => '2026-05-21 22:14:33',
                    'updated_at' => '2026-05-21 22:14:33',
                    'company_logo' => 'https://cdn.dribbble.com/userupload/47755867/file/2189873ec8356da6df841dc3b748d867.png?resize=24x24',
                    'website' => 'https://forms.monday.com/forms/13fb5f52e801aa0999965f2866bd0990?r=euc1',
                ),
                9 => 
                array (
                    'id' => 10,
                    'poster_id' => 13,
                    'title' => 'Senior Animator',
                    'company_name' => 'Biotune Pharmaceutical research',
                    'location' => 'Remote',
                    'job_type' => 'Full-time',
                    'description' => 'We are looking for a
Senior 3D Animator
to create premium, high-quality 3D animations for our
Digital Twin
platform. This role is key to visualizing complex concepts related to AI, health, biomarkers, and human systems in a clear, elegant, and engaging way. Please send your CV here
nk@biotune.co
(NOT to a website).
You will help define the 3D visual language of the product and brand.
Key Responsibilities:
• Create high-end 3D animations and motion sequences for:
Product explainers and brand films
Medical and scientific visualizations
Digital Twin concepts and data flows
Marketing and social media content
• Develop 3D assets, scenes, and animations from concept to final render
• Translate complex technical and biological concepts into clear visual stories
• Own lighting, materials, camera movement, and rendering quality
• Participate in storyboarding and visual concepting when required
• Handle compositing and basic editing to deliver polished final outputs
• Collaborate closely with product, UX/UI, marketing, and leadership teams
• Maintain visual consistency and premium quality across all 3D content
• Optimize 3D assets for different platforms (video, app, web, presentations)
• Work effectively in a fast-paced, evolving environment
Requirements:
• 5+ years of professional experience in 3D animation
• Strong portfolio with polished, cinematic, or product-driven 3D work
• Expertise in tools such as:
Cinema 4D, Blender, or Maya
Redshift / Octane / Cycles (or similar render engines)
After Effects for compositing and editing (required)
• Strong understanding of:
Animation principles, timing, and pacing
Lighting, materials, and camera storytelling
• Ability to work independently and manage projects end-to-end
• High attention to detail and visual quality
• Comfortable working in a fast-paced environment with changing priorities
Nice to Have:
• Experience with medical, biotech, or scientific visualization
• Experience visualizing data, systems, or abstract concepts
• Familiarity with UI-related 3D animations
• Startup or product-focused experience',
                    'description_html' => '
<p>We are looking for a <strong>Senior 3D Animator</strong> to create premium, high-quality 3D animations for our <strong>Digital Twin</strong> platform. This role is key to visualizing complex concepts related to AI, health, biomarkers, and human systems in a clear, elegant, and engaging way. Please send your CV here <a href="mailto:nk@biotune.co"><strong>nk@biotune.co</strong></a> (NOT to a website).</p><p>You will help define the 3D visual language of the product and brand.</p><p></p><p><strong>Key Responsibilities:</strong></p><p>• Create high-end 3D animations and motion sequences for:</p><ul><li><p>Product explainers and brand films</p></li><li><p>Medical and scientific visualizations</p></li><li><p>Digital Twin concepts and data flows</p></li><li><p>Marketing and social media content</p></li></ul><p>• Develop 3D assets, scenes, and animations from concept to final render</p><p>• Translate complex technical and biological concepts into clear visual stories</p><p>• Own lighting, materials, camera movement, and rendering quality</p><p>• Participate in storyboarding and visual concepting when required</p><p>• Handle compositing and basic editing to deliver polished final outputs</p><p>• Collaborate closely with product, UX/UI, marketing, and leadership teams</p><p>• Maintain visual consistency and premium quality across all 3D content</p><p>• Optimize 3D assets for different platforms (video, app, web, presentations)</p><p>• Work effectively in a fast-paced, evolving environment</p><p></p><p><strong>Requirements:</strong></p><p>• 5+ years of professional experience in 3D animation</p><p>• Strong portfolio with polished, cinematic, or product-driven 3D work</p><p>• Expertise in tools such as:</p><ul><li><p>Cinema 4D, Blender, or Maya</p></li><li><p>Redshift / Octane / Cycles (or similar render engines)</p></li><li><p>After Effects for compositing and editing (required)</p></li></ul><p>• Strong understanding of:</p><ul><li><p>Animation principles, timing, and pacing</p></li><li><p>Lighting, materials, and camera storytelling</p></li></ul><p>• Ability to work independently and manage projects end-to-end</p><p>• High attention to detail and visual quality</p><p>• Comfortable working in a fast-paced environment with changing priorities</p><p></p><p><strong>Nice to Have:</strong></p><p>• Experience with medical, biotech, or scientific visualization</p><p>• Experience visualizing data, systems, or abstract concepts</p><p>• Familiarity with UI-related 3D animations</p><p>• Startup or product-focused experience</p>
',
                    'apply_url' => 'https://biotunelab.com/',
                    'created_at' => '2026-05-21 22:14:36',
                    'updated_at' => '2026-05-21 22:14:36',
                    'company_logo' => 'https://cdn.dribbble.com/userupload/46102964/file/f555bd50eda239a994e95a547e0357a2.png?resize=24x24',
                    'website' => 'https://biotunelab.com/',
                ),
                10 => 
                array (
                    'id' => 11,
                    'poster_id' => 25,
                    'title' => 'Lead Product Designer, Marketplace',
                    'company_name' => 'Circle',
                    'location' => 'Remote',
                    'job_type' => 'Full-time',
                    'description' => 'About Us
Circle is building the world’s leading all-in-one platform for online communities. We make it possible for creators, coaches, educators, and businesses to bring together their audience with engaging discussions, live streams, events, chat, courses, and payments — all in one place, all under their own brand.
We’re proud to be a fully remote company of around 200 (and growing!) team members from 30+ countries around the world. We seek exceptional individuals around the world, set them up to do the best work of their lives, and in turn, create a meaningful impact in their own lives. We don\'t track hours, but we do manage for high expectations very closely. We collaborate across time zones, are highly async, and like to document a lot.
Twice a year, we bring the whole company together in beautiful places around the world for our company offsites. So far, we’ve hosted offsites in Turkey, Portugal, Mexico, Thailand, Colombia, Italy, Ireland, and more, with still more to come!
Check out our
Careers
page for more about working at Circle.
About Discover
People are looking for more than content. They\'re looking for growth, connection, and transformation — experiences that change how they see themselves and the world. Circle is where they find that. Not another platform optimizing for clicks and consumption — a place built around becoming something.
Discover is where Circle becomes visible to the world — the surface where creators get found and people find experiences worth their time. It\'s a two-sided marketplace problem spanning communities, courses, events, and more. And it\'s one of the most genuinely interesting design challenges on the platform.
About the role
You\'ll own Discover end-to-end as the lead designer: identifying opportunities, setting design direction, and shipping work that raises the bar for how discovery feels at Circle. You\'ll work closely with a founder-led product team that has strong vision and high standards — and you\'ll bring the craft, the systems thinking, and the bottom-up ideas that make that vision real.
You\'ll be joining a design team where context is shared openly, ownership is real, and talented people are trusted to do their best work.
This role is for designers with deep experience in consumer marketplace products — owning discovery, ranking, and engagement at scale; if your background is primarily in internal tools, CMS platforms, or growth systems, this role will not be a fit — please apply to our
Core Product
role instead.
The problem you\'ll be solving
Discovery is one of the hardest design problems. You\'re serving two audiences with opposing needs simultaneously: creators who need visibility, trust signals, and growth; and consumers who need signal through noise, confidence to commit, and experiences that deliver on their promise.
What makes this genuinely novel is AI as the core interaction model — not a filter or a recommendation widget, but the primary way Discover understands intent and surfaces what\'s worth someone\'s time. How does an AI-driven experience build trust in a marketplace? How do you make an AI-driven surface feel like a trusted recommendation from someone who knows you, not a ranked list from a system that doesn\'t? These are real open questions, and the quality of the answers will show up directly in the product.
What you\'ll be doing
Own Discover\'s design end-to-end.
Identify opportunities, frame problems, set design direction, and ship. You connect dots across the platform — understanding how a community business compound product feeds into what Discover surfaces — and you make that systems understanding visible in every design decision.
Design AI-driven discovery experiences.
The new world UX is conversational and relational. You\'ll design the interfaces, curation experiences, and trust signals that make AI-driven discovery feel effortless — building the relationship between the platform, creators, and members in ways that feel human, not algorithmic.
Serve both sides of the market.
You understand what makes a marketplace work at a systems level — how creator visibility gets earned, how consumer confidence gets built, how one broken experience erodes trust on both sides. That understanding drives your design decisions, not just your surface-level execution.
Prototype at speed.
You use AI-assisted tools — Cursor, Claude Code, v0, Lovable — because you\'ve already figured out it\'s how ideas get stress-tested fast. You stay in the problem through to launch, working closely with engineers to close the gap between concept and shipped experience.
Mentor and elevate.
You raise the craft standard on Discover through the quality of your own work and how you develop designers alongside you. You give real feedback and set a high bar.
What you\'ll need to be successful
Strong alignment with our values,
find our values on our career page
if you haven’t read up on them yet
You are proficient in English (spoken, written, and reading) at a
CEFR Level C2
/
ILR Level 5
.
Marketplace or two-sided platform experience — this is a hard requirement.
You\'ve designed for both sides of a market. You know what breaks trust and what builds it. Your portfolio shows you shaped outcomes, not just interfaces.
5+ years of product design experience
, including shipped 0→1 work, complex multi-user flows, and clear evidence that you drove product direction — not just executed it.
Experience as the most senior designer on a product area
— setting direction, making tradeoffs, and owning outcomes without constant guidance.
Genuine fluency with AI-assisted prototyping.
You build realistic prototypes yourself using tools like Cursor, Claude Code, v0, or Lovable. This is how you think, not just how you produce. You can speak concretely about your process.
Proficiency in Figma
for high-fidelity design and cross-functional collaboration.
Proactive communication.
You share your thinking before you\'re asked, surface decisions early, give real opinions, and keep your team informed without being prompted. At Circle, communication is how trust gets built and work gets shipped.
Comfort designing in ambiguity.
Discover is still taking shape. You build conviction through iteration, not by waiting for perfect requirements.
$140,000 - $170,000 USD per year
The cash compensation range shown is a starting point. In addition to equity, benefits and perks, your cash compensation is subject to an annual review and increase on a once per year basis.',
                    'description_html' => '
<h2><strong>About Us</strong></h2><p>Circle is building the world’s leading all-in-one platform for online communities. We make it possible for creators, coaches, educators, and businesses to bring together their audience with engaging discussions, live streams, events, chat, courses, and payments — all in one place, all under their own brand.</p><p>We’re proud to be a fully remote company of around 200 (and growing!) team members from 30+ countries around the world. We seek exceptional individuals around the world, set them up to do the best work of their lives, and in turn, create a meaningful impact in their own lives. We don\'t track hours, but we do manage for high expectations very closely. We collaborate across time zones, are highly async, and like to document a lot.</p><p>Twice a year, we bring the whole company together in beautiful places around the world for our company offsites. So far, we’ve hosted offsites in Turkey, Portugal, Mexico, Thailand, Colombia, Italy, Ireland, and more, with still more to come!</p><p>Check out our <a href="https://careers.circle.so/"><strong>Careers</strong></a> page for more about working at Circle.</p><h2><strong>About Discover</strong></h2><p>People are looking for more than content. They\'re looking for growth, connection, and transformation — experiences that change how they see themselves and the world. Circle is where they find that. Not another platform optimizing for clicks and consumption — a place built around becoming something.</p><p>Discover is where Circle becomes visible to the world — the surface where creators get found and people find experiences worth their time. It\'s a two-sided marketplace problem spanning communities, courses, events, and more. And it\'s one of the most genuinely interesting design challenges on the platform.</p><h2><strong>About the role</strong></h2><p>You\'ll own Discover end-to-end as the lead designer: identifying opportunities, setting design direction, and shipping work that raises the bar for how discovery feels at Circle. You\'ll work closely with a founder-led product team that has strong vision and high standards — and you\'ll bring the craft, the systems thinking, and the bottom-up ideas that make that vision real.</p><p>You\'ll be joining a design team where context is shared openly, ownership is real, and talented people are trusted to do their best work.</p><p><em>This role is for designers with deep experience in consumer marketplace products — owning discovery, ranking, and engagement at scale; if your background is primarily in internal tools, CMS platforms, or growth systems, this role will not be a fit — please apply to our </em><a href="https://circle.so/careers/greenhouse--5153629008"><strong><em>Core Product</em></strong></a><em> role instead.</em></p><h2><strong>The problem you\'ll be solving</strong></h2><p>Discovery is one of the hardest design problems. You\'re serving two audiences with opposing needs simultaneously: creators who need visibility, trust signals, and growth; and consumers who need signal through noise, confidence to commit, and experiences that deliver on their promise.</p><p>What makes this genuinely novel is AI as the core interaction model — not a filter or a recommendation widget, but the primary way Discover understands intent and surfaces what\'s worth someone\'s time. How does an AI-driven experience build trust in a marketplace? How do you make an AI-driven surface feel like a trusted recommendation from someone who knows you, not a ranked list from a system that doesn\'t? These are real open questions, and the quality of the answers will show up directly in the product.</p><h2><strong>What you\'ll be doing</strong></h2><ul><li><p><strong>Own Discover\'s design end-to-end.</strong> Identify opportunities, frame problems, set design direction, and ship. You connect dots across the platform — understanding how a community business compound product feeds into what Discover surfaces — and you make that systems understanding visible in every design decision.</p></li><li><p><strong>Design AI-driven discovery experiences.</strong> The new world UX is conversational and relational. You\'ll design the interfaces, curation experiences, and trust signals that make AI-driven discovery feel effortless — building the relationship between the platform, creators, and members in ways that feel human, not algorithmic.</p></li><li><p><strong>Serve both sides of the market.</strong> You understand what makes a marketplace work at a systems level — how creator visibility gets earned, how consumer confidence gets built, how one broken experience erodes trust on both sides. That understanding drives your design decisions, not just your surface-level execution.</p></li><li><p><strong>Prototype at speed.</strong> You use AI-assisted tools — Cursor, Claude Code, v0, Lovable — because you\'ve already figured out it\'s how ideas get stress-tested fast. You stay in the problem through to launch, working closely with engineers to close the gap between concept and shipped experience.</p></li><li><p><strong>Mentor and elevate.</strong> You raise the craft standard on Discover through the quality of your own work and how you develop designers alongside you. You give real feedback and set a high bar.</p></li></ul><h2><strong>What you\'ll need to be successful</strong></h2><ul><li><p>Strong alignment with our values, <a href="https://circle.so/careers"><strong>find our values on our career page</strong></a> if you haven’t read up on them yet</p></li><li><p>You are proficient in English (spoken, written, and reading) at a <a href="https://magoosh.com/english-speaking/english-proficiency-levels-a-guide-to-determining-your-level/"><strong>CEFR Level C2</strong></a> / <a href="https://www.govtilr.org/"><strong>ILR Level 5</strong></a>.</p></li><li><p><strong>Marketplace or two-sided platform experience — this is a hard requirement.</strong> You\'ve designed for both sides of a market. You know what breaks trust and what builds it. Your portfolio shows you shaped outcomes, not just interfaces.</p></li><li><p><strong>5+ years of product design experience</strong>, including shipped 0→1 work, complex multi-user flows, and clear evidence that you drove product direction — not just executed it.</p></li><li><p><strong>Experience as the most senior designer on a product area</strong> — setting direction, making tradeoffs, and owning outcomes without constant guidance.</p></li><li><p><strong>Genuine fluency with AI-assisted prototyping.</strong> You build realistic prototypes yourself using tools like Cursor, Claude Code, v0, or Lovable. This is how you think, not just how you produce. You can speak concretely about your process.</p></li><li><p><strong>Proficiency in Figma</strong> for high-fidelity design and cross-functional collaboration.</p></li><li><p><strong>Proactive communication.</strong> You share your thinking before you\'re asked, surface decisions early, give real opinions, and keep your team informed without being prompted. At Circle, communication is how trust gets built and work gets shipped.</p></li><li><p><strong>Comfort designing in ambiguity.</strong> Discover is still taking shape. You build conviction through iteration, not by waiting for perfect requirements.</p></li></ul><h2><strong>$140,000 - $170,000 USD per year</strong></h2><p><em>The cash compensation range shown is a starting point. In addition to equity, benefits and perks, your cash compensation is subject to an annual review and increase on a once per year basis.</em></p>
',
                    'apply_url' => 'https://circle.so/careers/greenhouse--5174459008',
                    'created_at' => '2026-05-21 22:14:39',
                    'updated_at' => '2026-05-21 22:14:39',
                    'company_logo' => 'https://cdn.dribbble.com/userupload/47420010/file/75d6ceca57c1b4269762a56c562bb059.jpg?resize=24x24',
                    'website' => 'https://circle.so/careers/greenhouse--5174459008',
                ),
                11 => 
                array (
                    'id' => 12,
                    'poster_id' => 33,
                    'title' => 'Lead Product Designer',
                    'company_name' => 'Circle',
                    'location' => 'Remote',
                    'job_type' => 'Full-time',
                    'description' => 'About Us
Circle is building the world’s leading all-in-one platform for online communities. We make it possible for creators, coaches, educators, and businesses to bring together their audience with engaging discussions, live streams, events, chat, courses, and payments — all in one place, all under their own brand.
We’re proud to be a fully remote company of around 200 (and growing!) team members from 30+ countries around the world. We seek exceptional individuals around the world, set them up to do the best work of their lives, and in turn, create a meaningful impact in their own lives. We don\'t track hours, but we do manage for high expectations very closely. We collaborate across time zones, are highly async, and like to document a lot.
Twice a year, we bring the whole company together in beautiful places around the world for our company offsites. So far, we’ve hosted offsites in Turkey, Portugal, Mexico, Thailand, Colombia, Italy, Ireland, and more, with still more to come!
Check out our
Careers
page for more about working at Circle.
About the role
You’ll own design for one of Circle’s most important product areas. That means you define the problem, shape the direction, and ship the experience—not wait for a brief. The specific area will be determined based on your strengths and company priorities.
You’ll report into the product design organization and work as the most senior design IC on your product area, partnering directly with product managers, engineers, and design leadership. You’ll also work alongside other Leads across Circle’s product surface. As the team grows, you’ll be expected to raise the bar for the designers around you.
AI is not a section on this job description—it’s how we work. Circle’s design team builds with AI tools daily: exploring product directions, prototyping with code-generation tools, stress-testing ideas faster than traditional workflows allow. We’re looking for someone who already works this way and wants to push it further.
What you\'ll be doing
Own a product area end-to-end: identify opportunities, frame the problem, set design direction, and ship—operating as a peer to Product and Engineering, not a downstream executor
Design complex, multi-step product flows that serve multiple user types—balancing creator needs against member experience, and making sophisticated behavior feel simple
Prototype and test at speed—using AI-assisted tools, code-generation workflows, and whatever gets you to a testable concept fastest
Influence product strategy beyond your own surface: contribute to roadmap conversations, flag opportunities other teams miss, and connect dots across the product
Drive the craft standard on your area—interaction design, visual quality, and the small details that separate polished product from “good enough”
Collaborate closely with engineers and design engineers to turn concepts into working, shippable experiences—not hand off specs and hope
Raise the bar for the broader design team through feedback, shared frameworks, and the quality of your own output
What you\'ll need to be successful
Strong alignment with our values,
find our values on our career page
if you haven’t read up on them yet
You are proficient in English (spoken, written, and reading) at a
CEFR Level C2
/
ILR Level 5
.
5–7+ years of product design experience. Your portfolio should show systems-level thinking: shipped 0→1 work, complex multi-user flows, and evidence that you shaped the product direction—not just the interface
Experience operating as the most senior designer on a product area—setting direction, making tradeoffs, and owning outcomes without constant guidance
Strong prototyping skills—you build clickable, realistic prototypes yourself. Bonus if you’re already using AI-assisted prototyping tools like Cursor, Claude Code, v0, or Lovable
Proficiency in Figma for high-fidelity design and collaboration
Exceptional written and verbal communication—able to clearly explain complex ideas, influence decisions, and align teams asynchronously. You write well because that’s how decisions get made in a distributed team
Comfortable designing in ambiguity and building conviction through iteration, not waiting for perfect requirements
An active, evolving AI workflow—you already use AI tools in your design process and can speak concretely about how. This isn’t a checkbox; it’s a real part of how we evaluate fit
$140,000 - $170,000 USD per year
The cash compensation range shown is a starting point. In addition to equity, benefits and perks, your cash compensation is subject to an annual review and increase on a once per year basis.
We are hiring at a Lead level for this role; however, we may consider offering this position at the Senior level depending on a candidate’s experience level alignment with the role. In either case, the offer would fall within the published compensation range.',
                    'description_html' => '
<h2>About Us</h2><p>Circle is building the world’s leading all-in-one platform for online communities. We make it possible for creators, coaches, educators, and businesses to bring together their audience with engaging discussions, live streams, events, chat, courses, and payments — all in one place, all under their own brand.</p><p>We’re proud to be a fully remote company of around 200 (and growing!) team members from 30+ countries around the world. We seek exceptional individuals around the world, set them up to do the best work of their lives, and in turn, create a meaningful impact in their own lives. We don\'t track hours, but we do manage for high expectations very closely. We collaborate across time zones, are highly async, and like to document a lot.</p><p>Twice a year, we bring the whole company together in beautiful places around the world for our company offsites. So far, we’ve hosted offsites in Turkey, Portugal, Mexico, Thailand, Colombia, Italy, Ireland, and more, with still more to come!</p><p>Check out our <a href="https://careers.circle.so/">Careers</a> page for more about working at Circle.</p><h2>About the role</h2><p>You’ll own design for one of Circle’s most important product areas. That means you define the problem, shape the direction, and ship the experience—not wait for a brief. The specific area will be determined based on your strengths and company priorities.</p><p>You’ll report into the product design organization and work as the most senior design IC on your product area, partnering directly with product managers, engineers, and design leadership. You’ll also work alongside other Leads across Circle’s product surface. As the team grows, you’ll be expected to raise the bar for the designers around you.</p><p>AI is not a section on this job description—it’s how we work. Circle’s design team builds with AI tools daily: exploring product directions, prototyping with code-generation tools, stress-testing ideas faster than traditional workflows allow. We’re looking for someone who already works this way and wants to push it further.</p><h2>What you\'ll be doing</h2><ul><li><p>Own a product area end-to-end: identify opportunities, frame the problem, set design direction, and ship—operating as a peer to Product and Engineering, not a downstream executor</p></li><li><p>Design complex, multi-step product flows that serve multiple user types—balancing creator needs against member experience, and making sophisticated behavior feel simple</p></li><li><p>Prototype and test at speed—using AI-assisted tools, code-generation workflows, and whatever gets you to a testable concept fastest</p></li><li><p>Influence product strategy beyond your own surface: contribute to roadmap conversations, flag opportunities other teams miss, and connect dots across the product</p></li><li><p>Drive the craft standard on your area—interaction design, visual quality, and the small details that separate polished product from “good enough”</p></li><li><p>Collaborate closely with engineers and design engineers to turn concepts into working, shippable experiences—not hand off specs and hope</p></li><li><p>Raise the bar for the broader design team through feedback, shared frameworks, and the quality of your own output</p></li></ul><h2>What you\'ll need to be successful</h2><ul><li><p>Strong alignment with our values, <a href="https://circle.so/careers">find our values on our career page</a> if you haven’t read up on them yet</p></li><li><p>You are proficient in English (spoken, written, and reading) at a <a href="https://magoosh.com/english-speaking/english-proficiency-levels-a-guide-to-determining-your-level/">CEFR Level C2</a> / <a href="https://www.govtilr.org/">ILR Level 5</a>.</p></li><li><p>5–7+ years of product design experience. Your portfolio should show systems-level thinking: shipped 0→1 work, complex multi-user flows, and evidence that you shaped the product direction—not just the interface</p></li><li><p>Experience operating as the most senior designer on a product area—setting direction, making tradeoffs, and owning outcomes without constant guidance</p></li><li><p>Strong prototyping skills—you build clickable, realistic prototypes yourself. Bonus if you’re already using AI-assisted prototyping tools like Cursor, Claude Code, v0, or Lovable</p></li><li><p>Proficiency in Figma for high-fidelity design and collaboration</p></li><li><p>Exceptional written and verbal communication—able to clearly explain complex ideas, influence decisions, and align teams asynchronously. You write well because that’s how decisions get made in a distributed team</p></li><li><p>Comfortable designing in ambiguity and building conviction through iteration, not waiting for perfect requirements</p></li><li><p>An active, evolving AI workflow—you already use AI tools in your design process and can speak concretely about how. This isn’t a checkbox; it’s a real part of how we evaluate fit</p></li></ul><h2>$140,000 - $170,000 USD per year</h2><p><em>The cash compensation range shown is a starting point. In addition to equity, benefits and perks, your cash compensation is subject to an annual review and increase on a once per year basis.</em></p><p><em>We are hiring at a Lead level for this role; however, we may consider offering this position at the Senior level depending on a candidate’s experience level alignment with the role. In either case, the offer would fall within the published compensation range.</em></p>
',
                    'apply_url' => 'https://circle.so/careers/greenhouse--5153629008',
                    'created_at' => '2026-05-21 22:14:42',
                    'updated_at' => '2026-05-21 22:14:42',
                    'company_logo' => 'https://cdn.dribbble.com/userupload/47419990/file/de0338ee34da51b08e31ba1fbb17a91d.jpg?resize=24x24',
                    'website' => 'https://circle.so/careers/greenhouse--5153629008',
                ),
                12 => 
                array (
                    'id' => 13,
                    'poster_id' => 64,
                    'title' => 'Senior Growth Designer',
                    'company_name' => 'Circle',
                    'location' => 'Remote',
                    'job_type' => 'Full-time',
                    'description' => 'About Us
Circle is building the world’s leading all-in-one platform for online communities. We make it possible for creators, coaches, educators, and businesses to bring together their audience with engaging discussions, live streams, events, chat, courses, and payments — all in one place, all under their own brand.
We’re proud to be a fully remote company of around 200 (and growing!) team members from 30+ countries around the world. We seek exceptional individuals around the world, set them up to do the best work of their lives, and in turn, create a meaningful impact in their own lives. We don\'t track hours, but we do manage for high expectations very closely. We collaborate across time zones, are highly async, and like to document a lot.
Twice a year, we bring the whole company together in beautiful places around the world for our company offsites. So far, we’ve hosted offsites in Turkey, Portugal, Mexico, Thailand, Colombia, Italy, Ireland, and more, with still more to come!
Check out our
Careers
page for more about working at Circle.
About the role
As a Senior Growth Designer at Circle, you\'ll play a key role in shaping how we present our brand and products to the world, with primary focus on our marketing website. This role sits within our Design Studio team—the creative engine behind all of Circle\'s marketing design—and specializes in designing high-impact, visually compelling pages for our digital presence, particularly our marketing site that serves as the primary conversion point for prospective customers.
We\'re looking for someone with exceptional visual design skills and a strong brand sensibility who can translate our brand identity into compelling digital experiences on our marketing website. You\'ll thrive at the intersection of brand stewardship and creative execution, with a keen eye for design detail and an ability to solve business challenges through beautiful, thoughtful web experiences. You\'ll partner closely with our Marketing teams to drive visual storytelling, lead marketing site and landing page design efforts, and help evolve how our site communicates value to prospective customers.
What you\'ll be doing
Lead the design and evolution of Circle\'s marketing website, creating a cohesive and compelling digital front door for our products and brand
Design new marketing site pages, landing pages, and other high-visibility digital experiences that support product launches, growth campaigns, and brand storytelling
Own the marketing site user experience, ensuring it effectively communicates our value proposition and drives conversions while maintaining brand integrity
Bring our brand to life across our web presence—ensuring each page is not just functional, but expressive of Circle\'s personality and values
Create responsive, high-fidelity mockups and interactive prototypes in Figma for marketing site initiatives
Work alongside developers to bring your marketing site designs to life, ensuring pixel-perfect implementation and responsive performance across devices
Continuously audit and improve existing marketing pages using feedback, data, and design best practices
Collaborate with growth marketers to design conversion-focused experiences that balance brand expression with business goals
Stay informed about design and brand trends within the SaaS landscape to ensure our marketing design remains fresh, inspiring, and relevant
Work autonomously on end-to-end marketing site projects—from early concept to delivery—while communicating progress and collaborating asynchronously when needed
Research emerging AI tools and trends in design, identifying opportunities to leverage new technologies in our marketing design process
What you\'ll need to be successful
Strong alignment with our values,
find our values on our career page
if you haven’t read up on them yet
You are proficient in English (spoken, written, and reading) at a
CEFR Level C2
/
ILR Level 5
.
5+ years of experience designing websites or landing pages for marketing purposes, ideally for SaaS or digital product companies
A portfolio that showcases exceptional marketing website design, with demonstrated success in creating visually compelling pages that drive user engagement and conversion
Experience leading the design direction for marketing sites and proven success in creating cohesive, conversion-focused web experiences
A strong brand sensibility—you know how to design marketing experiences that feel cohesive, memorable, and aligned with a company\'s identity
Advanced proficiency in Figma, with the ability to design responsive layouts and component-based pages for marketing websites
Strong visual design skills with exceptional typography, color theory, and layout composition abilities specifically applied to marketing contexts
Understanding of marketing website optimization, responsive design, web performance, and accessibility best practices
Knowledge of conversion-centered design principles and how to apply them to marketing site layouts
Ability to work collaboratively with marketing and growth teams with a positive attitude toward problem-solving
Excellent communication skills—you\'re comfortable presenting your ideas, incorporating feedback, and working with stakeholders
Interest in AI-driven design tools and willingness to explore how they can enhance the marketing design process
$100,000 - $120,000 USD per year
The cash compensation range shown is a starting point. In addition to equity, benefits and perks, your cash compensation is subject to an annual review and increase on a once per year basis.',
                    'description_html' => '
<h2><strong>About Us</strong></h2><p>Circle is building the world’s leading all-in-one platform for online communities. We make it possible for creators, coaches, educators, and businesses to bring together their audience with engaging discussions, live streams, events, chat, courses, and payments — all in one place, all under their own brand.</p><p>We’re proud to be a fully remote company of around 200 (and growing!) team members from 30+ countries around the world. We seek exceptional individuals around the world, set them up to do the best work of their lives, and in turn, create a meaningful impact in their own lives. We don\'t track hours, but we do manage for high expectations very closely. We collaborate across time zones, are highly async, and like to document a lot.</p><p>Twice a year, we bring the whole company together in beautiful places around the world for our company offsites. So far, we’ve hosted offsites in Turkey, Portugal, Mexico, Thailand, Colombia, Italy, Ireland, and more, with still more to come!</p><p>Check out our <a href="https://careers.circle.so/"><strong>Careers</strong></a> page for more about working at Circle.</p><h2><strong>About the role</strong></h2><p>As a Senior Growth Designer at Circle, you\'ll play a key role in shaping how we present our brand and products to the world, with primary focus on our marketing website. This role sits within our Design Studio team—the creative engine behind all of Circle\'s marketing design—and specializes in designing high-impact, visually compelling pages for our digital presence, particularly our marketing site that serves as the primary conversion point for prospective customers.</p><p>We\'re looking for someone with exceptional visual design skills and a strong brand sensibility who can translate our brand identity into compelling digital experiences on our marketing website. You\'ll thrive at the intersection of brand stewardship and creative execution, with a keen eye for design detail and an ability to solve business challenges through beautiful, thoughtful web experiences. You\'ll partner closely with our Marketing teams to drive visual storytelling, lead marketing site and landing page design efforts, and help evolve how our site communicates value to prospective customers.</p><p> <strong>What you\'ll be doing</strong></p><ul><li><p>Lead the design and evolution of Circle\'s marketing website, creating a cohesive and compelling digital front door for our products and brand</p></li><li><p>Design new marketing site pages, landing pages, and other high-visibility digital experiences that support product launches, growth campaigns, and brand storytelling</p></li><li><p>Own the marketing site user experience, ensuring it effectively communicates our value proposition and drives conversions while maintaining brand integrity</p></li><li><p>Bring our brand to life across our web presence—ensuring each page is not just functional, but expressive of Circle\'s personality and values</p></li><li><p>Create responsive, high-fidelity mockups and interactive prototypes in Figma for marketing site initiatives</p></li><li><p>Work alongside developers to bring your marketing site designs to life, ensuring pixel-perfect implementation and responsive performance across devices</p></li><li><p>Continuously audit and improve existing marketing pages using feedback, data, and design best practices</p></li><li><p>Collaborate with growth marketers to design conversion-focused experiences that balance brand expression with business goals</p></li><li><p>Stay informed about design and brand trends within the SaaS landscape to ensure our marketing design remains fresh, inspiring, and relevant</p></li><li><p>Work autonomously on end-to-end marketing site projects—from early concept to delivery—while communicating progress and collaborating asynchronously when needed</p></li><li><p>Research emerging AI tools and trends in design, identifying opportunities to leverage new technologies in our marketing design process</p></li></ul><h2><strong>What you\'ll need to be successful</strong></h2><ul><li><p>Strong alignment with our values, <a href="https://circle.so/careers"><strong>find our values on our career page</strong></a> if you haven’t read up on them yet</p></li><li><p>You are proficient in English (spoken, written, and reading) at a <a href="https://magoosh.com/english-speaking/english-proficiency-levels-a-guide-to-determining-your-level/"><strong>CEFR Level C2</strong></a> / <a href="https://www.govtilr.org/"><strong>ILR Level 5</strong></a>.</p></li><li><p>5+ years of experience designing websites or landing pages for marketing purposes, ideally for SaaS or digital product companies</p></li><li><p>A portfolio that showcases exceptional marketing website design, with demonstrated success in creating visually compelling pages that drive user engagement and conversion</p></li><li><p>Experience leading the design direction for marketing sites and proven success in creating cohesive, conversion-focused web experiences</p></li><li><p>A strong brand sensibility—you know how to design marketing experiences that feel cohesive, memorable, and aligned with a company\'s identity</p></li><li><p>Advanced proficiency in Figma, with the ability to design responsive layouts and component-based pages for marketing websites</p></li><li><p>Strong visual design skills with exceptional typography, color theory, and layout composition abilities specifically applied to marketing contexts</p></li><li><p>Understanding of marketing website optimization, responsive design, web performance, and accessibility best practices</p></li><li><p>Knowledge of conversion-centered design principles and how to apply them to marketing site layouts</p></li><li><p>Ability to work collaboratively with marketing and growth teams with a positive attitude toward problem-solving</p></li><li><p>Excellent communication skills—you\'re comfortable presenting your ideas, incorporating feedback, and working with stakeholders</p></li><li><p>Interest in AI-driven design tools and willingness to explore how they can enhance the marketing design process</p></li></ul><h2><strong>$100,000 - $120,000 USD per year</strong></h2><p><em>The cash compensation range shown is a starting point. In addition to equity, benefits and perks, your cash compensation is subject to an annual review and increase on a once per year basis.</em></p>
',
                    'apply_url' => 'https://circle.so/careers/greenhouse--4905487008',
                    'created_at' => '2026-05-21 22:14:44',
                    'updated_at' => '2026-05-21 22:14:44',
                    'company_logo' => 'https://cdn.dribbble.com/userupload/47420058/file/fae2b0414eb8639ee7e0c512961bdacc.jpg?resize=24x24',
                    'website' => 'https://circle.so/careers/greenhouse--4905487008',
                ),
                13 => 
                array (
                    'id' => 14,
                    'poster_id' => 36,
                'title' => 'Designers (Web, UI/UX, Presentations)',
                    'company_name' => 'Prepaire Labs',
                    'location' => 'Remote',
                    'job_type' => 'Freelance',
                    'description' => 'We’re building a set of products across biotech, AI, and digital health — and we’re looking to work with
multiple strong designers across different areas
.
This is
not a single role
. We are hiring across several parallel projects.
Projects
1. Presentation Design
Investor decks, product storytelling, internal presentations
Focus on clarity, structure, and premium visual quality
2. Prepaire Website (Full Redesign)
Modern, trustworthy biotech website
Strong UX, structure, and hierarchy
Full design system (desktop + mobile)
Timeline: ~3–4 weeks
3. FAST Website (Creative / Interactive)
Experimental and visually driven
Motion, animation, dynamic content
Strong interaction design
4. AiPOD Dashboard (Product / UI)
Data-heavy surveillance dashboard
Clean, intuitive UX for complex systems
5. GenetiQ Website
Premium product-focused website
Clear storytelling of complex concepts
Based on an existing visual system
6. Antitoxine Website
Transform presentation into a structured website
Strong narrative and scientific clarity
What we’re looking for
Strong portfolio (non-negotiable)
Ability to simplify complex ideas
Clean, modern design taste
Reliable and responsive
Bonus:
Motion / animation
Experience with data-heavy UI
Experience in biotech / health / technical products
Engagement
Project-based (multiple designers will be selected)
Remote
Potential for ongoing work
How to apply
Please include:
Your portfolio
Which project(s) you’re best suited for
Relevant examples (very important)
Availability (hours/week + start timing)',
                        'description_html' => '
<p>We’re building a set of products across biotech, AI, and digital health — and we’re looking to work with <strong>multiple strong designers across different areas</strong>.</p><p>This is <strong>not a single role</strong>. We are hiring across several parallel projects.</p><p><strong>Projects</strong></p><p><strong>1. Presentation Design</strong></p><ul><li><p>Investor decks, product storytelling, internal presentations</p></li><li><p>Focus on clarity, structure, and premium visual quality</p></li></ul><p><strong>2. Prepaire Website (Full Redesign)</strong></p><ul><li><p>Modern, trustworthy biotech website</p></li><li><p>Strong UX, structure, and hierarchy</p></li><li><p>Full design system (desktop + mobile)</p></li><li><p>Timeline: ~3–4 weeks</p></li></ul><p><strong>3. FAST Website (Creative / Interactive)</strong></p><ul><li><p>Experimental and visually driven</p></li><li><p>Motion, animation, dynamic content</p></li><li><p>Strong interaction design</p></li></ul><p><strong>4. AiPOD Dashboard (Product / UI)</strong></p><ul><li><p>Data-heavy surveillance dashboard</p></li><li><p>Clean, intuitive UX for complex systems</p></li></ul><p><strong>5. GenetiQ Website</strong></p><ul><li><p>Premium product-focused website</p></li><li><p>Clear storytelling of complex concepts</p></li><li><p>Based on an existing visual system</p></li></ul><p><strong>6. Antitoxine Website</strong></p><ul><li><p>Transform presentation into a structured website</p></li><li><p>Strong narrative and scientific clarity</p><p></p><p></p></li></ul><p></p><p>What we’re looking for</p><ul><li><p>Strong portfolio (non-negotiable)</p></li><li><p>Ability to simplify complex ideas</p></li><li><p>Clean, modern design taste</p></li><li><p>Reliable and responsive</p></li></ul><p>Bonus:</p><ul><li><p>Motion / animation</p></li><li><p>Experience with data-heavy UI</p></li><li><p>Experience in biotech / health / technical products</p></li></ul><p>Engagement</p><ul><li><p>Project-based (multiple designers will be selected)</p></li><li><p>Remote</p></li><li><p>Potential for ongoing work</p></li></ul><p>How to apply </p><p>Please include:</p><ol><li><p>Your portfolio</p></li><li><p>Which project(s) you’re best suited for</p></li><li><p>Relevant examples (very important)</p></li><li><p>Availability (hours/week + start timing)</p></li></ol>
',
                        'apply_url' => 'https://docs.google.com/forms/d/e/1FAIpQLSf8mGRwFjao5dLsVqaYRHFXmNZkubbtDwp8-ba54YY2hOBQmA/viewform',
                        'created_at' => '2026-05-21 22:14:47',
                        'updated_at' => '2026-05-21 22:14:47',
                        'company_logo' => 'https://cdn.dribbble.com/userupload/47415142/file/2f06291a7c39eb2131c74c75b496ed3b.jpg?resize=24x24',
                        'website' => 'https://docs.google.com/forms/d/e/1FAIpQLSf8mGRwFjao5dLsVqaYRHFXmNZkubbtDwp8-ba54YY2hOBQmA/viewform',
                    ),
                    14 => 
                    array (
                        'id' => 15,
                        'poster_id' => 41,
                        'title' => 'Senior Product Designer',
                        'company_name' => 'DesignFiles',
                        'location' => 'Remote',
                        'job_type' => 'Freelance',
                        'description' => 'About the job
We’re looking for a
Senior Product Designer
to help shape the core experiences interior designers use every day — from their first design to final client delivery and payment. You’ll design and iterate on workflows, features, and experiments that directly impact activation, engagement, and retention.
This role sits at the intersection of product, growth, and engineering. You’ll own problems end-to-end, remove friction from complex workflows, and ship intuitive, high-impact features used by thousands of designers.
About Us
DesignFiles is the all-in-one platform interior designers use to run their businesses. More than 7,000 designers rely on DesignFiles to manage real projects and get paid.
We’re a remote team of 30+ builders focused on creating powerful creative tools and connected workflows that help solo designers operate like much bigger teams.
What You’ll Do
Design end-to-end product experiences across onboarding, creative tools, client delivery, and project workflows
Lead design on growth and activation experiments that improve conversion, engagement, and retention
Translate user problems into clear flows, prototypes, and high-fidelity UI
Partner closely with product and engineering from concept through launch
Own design quality from concept through production
Use research and data to uncover friction and validate solutions
Iterate quickly — shipping, learning, and refining based on real-world usage
Help define scope, tradeoffs, and priorities to maximize impact
Improve and evolve our design system
What We’re Looking For
5+ years of experience designing complex SaaS or product-led software
Strong product thinking — you design with business outcomes and user goals in mind
Experience working on activation, onboarding, or growth-focused initiatives
Excellent UX instincts and strong visual design craft
Fluency in Figma (components, auto-layout, prototyping, design systems)
Experience partnering day-to-day with frontend and backend engineers — aligning early on feasibility, navigating tradeoffs, and iterating through implementation, QA, and launch
Comfort working with data, funnels, and experiment-driven development
Strong communication skills and ability to explain design decisions clearly
Ownership mindset — you take problems end-to-end and see them through
Bonus points if you’ve worked on:
Workflow-heavy products (project management, finance, CRM, etc.)
AI-powered or automation-driven features
Design systems at scale
Role Details
This is a
full-time, 40-hour/week remote contract role
.  We’re specifically seeking candidates (not agencies) based within
±2 hours of UTC.',
                        'description_html' => '
<h2><strong>About the job</strong></h2><p>We’re looking for a <strong>Senior Product Designer</strong> to help shape the core experiences interior designers use every day — from their first design to final client delivery and payment. You’ll design and iterate on workflows, features, and experiments that directly impact activation, engagement, and retention.</p><p>This role sits at the intersection of product, growth, and engineering. You’ll own problems end-to-end, remove friction from complex workflows, and ship intuitive, high-impact features used by thousands of designers.</p><h2><strong>About Us</strong></h2><p>DesignFiles is the all-in-one platform interior designers use to run their businesses. More than 7,000 designers rely on DesignFiles to manage real projects and get paid.</p><p>We’re a remote team of 30+ builders focused on creating powerful creative tools and connected workflows that help solo designers operate like much bigger teams.</p><h2><strong>What You’ll Do</strong></h2><ul><li><p>Design end-to-end product experiences across onboarding, creative tools, client delivery, and project workflows</p></li><li><p>Lead design on growth and activation experiments that improve conversion, engagement, and retention</p></li><li><p>Translate user problems into clear flows, prototypes, and high-fidelity UI</p></li><li><p>Partner closely with product and engineering from concept through launch</p></li><li><p>Own design quality from concept through production</p></li><li><p>Use research and data to uncover friction and validate solutions</p></li><li><p>Iterate quickly — shipping, learning, and refining based on real-world usage</p></li><li><p>Help define scope, tradeoffs, and priorities to maximize impact</p></li><li><p>Improve and evolve our design system</p></li></ul><h2><strong>What We’re Looking For</strong></h2><ul><li><p>5+ years of experience designing complex SaaS or product-led software</p></li><li><p>Strong product thinking — you design with business outcomes and user goals in mind</p></li><li><p>Experience working on activation, onboarding, or growth-focused initiatives</p></li><li><p>Excellent UX instincts and strong visual design craft</p></li><li><p>Fluency in Figma (components, auto-layout, prototyping, design systems)</p></li><li><p>Experience partnering day-to-day with frontend and backend engineers — aligning early on feasibility, navigating tradeoffs, and iterating through implementation, QA, and launch</p></li><li><p>Comfort working with data, funnels, and experiment-driven development</p></li><li><p>Strong communication skills and ability to explain design decisions clearly</p></li><li><p>Ownership mindset — you take problems end-to-end and see them through</p></li></ul><p><strong>Bonus points if you’ve worked on:</strong></p><ul><li><p>Workflow-heavy products (project management, finance, CRM, etc.)</p></li><li><p>AI-powered or automation-driven features</p></li><li><p>Design systems at scale</p></li></ul><h2><strong>Role Details</strong></h2><p>This is a <strong>full-time, 40-hour/week remote contract role</strong>.  We’re specifically seeking candidates (not agencies) based within <strong>±2 hours of UTC.</strong></p>
',
                        'apply_url' => 'https://designfiles.homerun.co/senior-product-designer/en',
                        'created_at' => '2026-05-21 22:14:50',
                        'updated_at' => '2026-05-21 22:14:50',
                        'company_logo' => 'https://cdn.dribbble.com/userupload/46407089/file/f00e03e03a106f422451c5987b21d34d.png?resize=24x24',
                        'website' => 'https://designfiles.homerun.co/senior-product-designer/en',
                    ),
                    15 => 
                    array (
                        'id' => 16,
                        'poster_id' => 63,
                        'title' => 'Senior Product Designer',
                        'company_name' => 'Helcim',
                        'location' => 'Calgary, AB',
                        'job_type' => 'Full-time',
                        'description' => 'What We\'re Building 🚀
Helcim is searching for an experienced
Senior Product Designer
to join our Design team. The successful candidate will be responsible for improving and evolving our payment product experience while taking ownership of the Helcim design system maintenance and evolution.
The
Senior Product Designer
will work within the Design team while collaborating with cross-functional business groups, including Product Managers, Front-end and Backend engineers, and Brand designers. The ideal candidate is passionate about design and technology, has extensive knowledge of constraints and opportunities, and can craft modern and delightful visual experiences that are informed by user research and AI-driven insights.
Are You Our Next Builder? 🛠️
You have a minimum 5+ years experience working in the UX design field, with at least 2 years working with design systems
An obsession for simplifying complex user experience flows.
Great sensibility for design & aesthetics.
You have a research mindset that aims to investigate the problem, leverage the right methods to uncover findings, and elaborate on solutions accordingly.
Strong understanding of Lean and Agile approaches when researching and implementing solutions, with the ability to identify opportunities to leverage agentic automation throughout each phase of the UX process.
Firm grasp of how to develop and work within design systems and patterns.
Manage your time effectively by determining the right amount of time to invest in research activities and identifying which activities are best to inform your decisions.
Always willing to take constructive criticism.
Collaborative attitude that prioritizes teamwork over individual work.
Excellent communication skills, both written and oral, combined with strong interpersonal skills.
Must provide a design portfolio showcasing UX design projects with beautiful hi-fi design mockups.
✨
Not checking every box? Please apply anyway! We know that candidates have different experiences that may make them a great fit for this position and for Helcim. We believe that diversity and having an inclusive culture is not only the right thing, but key to our long-term success. Diversity brings more experience, view-points, knowledge and insight about our future. We also want to provide an accessible interview process, so if there’s any accommodations that would make your experience more comfortable, please let us know.
The Role: What You’ll Own 🔑
Design with purpose utilizing both research and creativity.
Execute high-quality product design that accounts for usability, aesthetic, and brand
Maintain and evolve a scalable design system with clear governance, rigorous documentation, and continuous iteration—ensuring consistency, performance, and quality across every Helcim product experience.
Leverage creative thinking to explore different solutions, concepts, and ideas continually.
Employ AI solutions to research, ideation and execution to speed up the UX process
Work side by side with Product Managers and engineers.
Helcim: The Big Picture 🖼️
Helcim was founded with a mission at heart: to be the world’s most loved payment system. From the very start, we knew that we wanted to be different from every payment processor out there. We want the merchants we serve to feel supported and see us as a trusted partner rather than simply just another “cost of doing business.” We are
relentless
in our pursuit to provide a radically transparent and honest payments solution that flat out saves business owners money, all while treating them like human beings.
At Helcim, we build a team of engaged, caring and intelligent people.  In return we provide an environment where you can be excited to come to work each day and tackle these challenges with an amazing team.  Learn more in our culture book;
The Way of the Helcim
.
The Helcim Culture: How We Work
We Are Builders:
We don\'t wait for solutions; we create them.
The Harder Path:
We choose what’s difficult because it’s more rewarding.
Creating Trust:
We earn it every day by being our best selves.
Company of Many:
We’re a collective force. Great teams do great things.
The Perks: Why You’ll Love It Here 🎁
Ownership:
Every single team member gets
Stock Options
. You own a piece of what you build! 📈
Health First:
Comprehensive benefits + a Health Spending Account (HSA) starting on
Day 1
. 🦷
Flexibility:
Hybrid life! We’re in-office Mon/Wed/Fri and remote Tue/Thu. 🏠
Family Support:
Top-ups for maternity/parental leave and "bonding breaks." 👶
Rest & Recharge:
Paid vacation + a full company break in December. ❄️
Growth:
$500 annual training budget to keep your skills sharp. 📚',
                        'description_html' => '
<p>What We\'re Building 🚀</p><p>Helcim is searching for an experienced<strong> Senior Product Designer</strong> to join our Design team. The successful candidate will be responsible for improving and evolving our payment product experience while taking ownership of the Helcim design system maintenance and evolution.</p><p>The<strong> Senior Product Designer</strong> will work within the Design team while collaborating with cross-functional business groups, including Product Managers, Front-end and Backend engineers, and Brand designers. The ideal candidate is passionate about design and technology, has extensive knowledge of constraints and opportunities, and can craft modern and delightful visual experiences that are informed by user research and AI-driven insights.</p><p>Are You Our Next Builder? 🛠️</p><ul><li><p>You have a minimum 5+ years experience working in the UX design field, with at least 2 years working with design systems</p></li><li><p>An obsession for simplifying complex user experience flows.</p></li><li><p>Great sensibility for design &amp; aesthetics.</p></li><li><p>You have a research mindset that aims to investigate the problem, leverage the right methods to uncover findings, and elaborate on solutions accordingly.</p></li><li><p>Strong understanding of Lean and Agile approaches when researching and implementing solutions, with the ability to identify opportunities to leverage agentic automation throughout each phase of the UX process.</p></li><li><p>Firm grasp of how to develop and work within design systems and patterns.</p></li><li><p>Manage your time effectively by determining the right amount of time to invest in research activities and identifying which activities are best to inform your decisions.</p></li><li><p>Always willing to take constructive criticism.</p></li><li><p>Collaborative attitude that prioritizes teamwork over individual work.</p></li><li><p>Excellent communication skills, both written and oral, combined with strong interpersonal skills.</p></li><li><p>Must provide a design portfolio showcasing UX design projects with beautiful hi-fi design mockups.</p></li></ul><p><strong><em>✨</em></strong><em> Not checking every box? Please apply anyway! We know that candidates have different experiences that may make them a great fit for this position and for Helcim. We believe that diversity and having an inclusive culture is not only the right thing, but key to our long-term success. Diversity brings more experience, view-points, knowledge and insight about our future. We also want to provide an accessible interview process, so if there’s any accommodations that would make your experience more comfortable, please let us know.</em></p><p>The Role: What You’ll Own 🔑</p><ul><li><p>Design with purpose utilizing both research and creativity.</p></li><li><p>Execute high-quality product design that accounts for usability, aesthetic, and brand</p></li><li><p>Maintain and evolve a scalable design system with clear governance, rigorous documentation, and continuous iteration—ensuring consistency, performance, and quality across every Helcim product experience.</p></li><li><p>Leverage creative thinking to explore different solutions, concepts, and ideas continually.</p></li><li><p>Employ AI solutions to research, ideation and execution to speed up the UX process</p></li><li><p>Work side by side with Product Managers and engineers.</p></li></ul><p>Helcim: The Big Picture 🖼️</p><p>Helcim was founded with a mission at heart: to be the world’s most loved payment system. From the very start, we knew that we wanted to be different from every payment processor out there. We want the merchants we serve to feel supported and see us as a trusted partner rather than simply just another “cost of doing business.” We are <strong>relentless</strong> in our pursuit to provide a radically transparent and honest payments solution that flat out saves business owners money, all while treating them like human beings.</p><p>At Helcim, we build a team of engaged, caring and intelligent people.  In return we provide an environment where you can be excited to come to work each day and tackle these challenges with an amazing team.  Learn more in our culture book; <a href="https://www.helcim.com/theway/">The Way of the Helcim</a>.</p><p><strong>The Helcim Culture: How We Work </strong></p><ul><li><p><strong>We Are Builders:</strong> We don\'t wait for solutions; we create them. </p></li><li><p><strong>The Harder Path:</strong> We choose what’s difficult because it’s more rewarding. </p></li><li><p><strong>Creating Trust:</strong> We earn it every day by being our best selves. </p></li><li><p><strong>Company of Many:</strong> We’re a collective force. Great teams do great things. </p></li></ul><p></p><p><strong>The Perks: Why You’ll Love It Here 🎁</strong></p><ul><li><p><strong>Ownership:</strong> Every single team member gets <strong>Stock Options</strong>. You own a piece of what you build! 📈</p></li><li><p><strong>Health First:</strong> Comprehensive benefits + a Health Spending Account (HSA) starting on <strong>Day 1</strong>. 🦷</p></li><li><p><strong>Flexibility:</strong> Hybrid life! We’re in-office Mon/Wed/Fri and remote Tue/Thu. 🏠</p></li><li><p><strong>Family Support:</strong> Top-ups for maternity/parental leave and "bonding breaks." 👶</p></li><li><p><strong>Rest &amp; Recharge:</strong> Paid vacation + a full company break in December. ❄️</p></li><li><p><strong>Growth:</strong> $500 annual training budget to keep your skills sharp. 📚</p></li></ul>
',
                        'apply_url' => 'https://helcim.careers.hibob.com/jobs/838164ed-594e-4f81-b823-6d2844674248/apply',
                        'created_at' => '2026-05-21 22:14:53',
                        'updated_at' => '2026-05-21 22:14:53',
                        'company_logo' => 'https://cdn.dribbble.com/userupload/47742610/file/01538dd97e2fde76ee9722006aa6f763.jpg?resize=24x24',
                        'website' => 'https://helcim.careers.hibob.com/jobs/838164ed-594e-4f81-b823-6d2844674248/apply',
                    ),
                    16 => 
                    array (
                        'id' => 17,
                        'poster_id' => 64,
                        'title' => 'Sr. Product Designer',
                        'company_name' => 'Suralink Inc',
                        'location' => 'Remote',
                        'job_type' => 'Full-time',
                    'description' => 'Suralink® is a fast-growing Software as a Service (SaaS) technology company looking for exceptional professionals to join our team. Our award-winning company has been recognized for growth, innovation, and culture, and over 500,000 companies worldwide have used our software. Our platform was built for accounting and other professional service firms, giving them a simple and secure way to request, receive, track, and manage their documents at scale. If you’re looking for a promising company where you can genuinely make your mark, we’d love to talk to you.
Who we are looking for: As a Senior Product Designer, you’ll lead design for key product areas across Suralink’s platform. You’ll partner closely with product management, engineering, customer success, and customers to translate complex workflows into intuitive, elegant user experiences.
You’ll drive end-to-end design, from discovery and problem definition, through polished execution while contributing to a healthy design culture and elevating craft across the team.
Key Responsibilities:
Product Design & Problem Solving
Lead end-to-end design for major product areas, turning complex workflows into intuitive experiences.
Explore solutions, validate assumptions, and use insight to guide clear, effective designs.
User Research & Customer Understanding
Conduct or support interviews, usability tests, and feedback sessions.
Translate findings into actionable improvements that strengthen the user experience.
Execution, Craft, & Collaboration
Partner closely with engineering and product from scoping through delivery.
Communicate design rationale clearly and ensure high-quality implementation.
Design Systems & Consistency
Use and contribute to Suralink’s design system to maintain consistency and scalability.
Evolve components, patterns, and documentation as product needs grow.
Agency, Ownership & Critical Thinking
Operate with autonomy, driving clarity and momentum through ambiguity.
Challenge assumptions, simplify complexity, and align stakeholders around the best solution.
Experience and Professional Qualifications
4+ years of experience designing for complex SaaS products.
Proven experience designing AI or data-driven features (or a strong interest in LLM-enabled interfaces).
Proficiency in Figma (Auto Layout, variants, variables, libraries, tokens).
Strong portfolio showing systems thinking and ability to ship elegant, cohesive experiences.
Experience collaborating closely with engineering and product leadership to shape roadmaps.
Excellent communication, documentation, and presentation skills.
Understanding of accessibility standards (WCAG) and commitment to inclusive design.
Preferred experience and qualifications
Experience with prompt-based interaction design or conversational UI.
Familiarity with front-end frameworks, design tokens, or semantic versioning.
Previous work in accounting, fintech, or compliance-driven B2B SaaS.
Interest in emerging technologies and how they influence user experience.
Competencies:
Visual Design & Brand: The ability to execute beautiful, high-quality visual design that strengthens the brand.
UX & Patterns: The skill of architecting user experiences that are intuitive, consistent, and effective.
Process & Toolkit: The efficiency and craft in using the right tools and processes to turn ideas into reality.
Customer Obsession: The ability to deeply understand, empathize with, and advocate for the customer through research and data.
Product Strategy & Experiments: The ability to align design work with business goals, using data to guide decisions.
Communication & Fluency: How effectively a designer shares their work, provides feedback, and works with cross-functional partners.
Team & Company Impact: The impact a designer has on the health of the team and the growth of the company.
At Suralink, our values guide everything we do:
Customer Obsessed: We seek to understand those we serve deeply and are committed to serving them better than anyone else.
Passionately Motivated: We care about what we do, which drives us to work hard, show grit, and go above and beyond to achieve great outcomes.
Constantly Improving: We are eager to learn and grow. Challenges are opportunities to innovate and enhance our solutions.
Team Focused: We know that our success is built together. We support one another and celebrate team achievements.
Highly Reliable: We demonstrate good judgment, honor our commitments, and are accountable for our results.
Why Suralink?
There’s a lot to love about working at Suralink! Here are a few of the benefits you can expect:
Remote-friendly policy
Medical/vision/dental insurance
Life, short-term disability, and long-term disability insurance
Generous Paid time off, including flexible floating holidays that you choose
Parental leave
Professional development allowance
Community involvement
Apply Here:
https://www.click2apply.net/WAjKeLu7nO8pMUJL4ikNmb
PI284534457',
                    'description_html' => '
<p>Suralink® is a fast-growing Software as a Service (SaaS) technology company looking for exceptional professionals to join our team. Our award-winning company has been recognized for growth, innovation, and culture, and over 500,000 companies worldwide have used our software. Our platform was built for accounting and other professional service firms, giving them a simple and secure way to request, receive, track, and manage their documents at scale. If you’re looking for a promising company where you can genuinely make your mark, we’d love to talk to you.</p><p>Who we are looking for: As a Senior Product Designer, you’ll lead design for key product areas across Suralink’s platform. You’ll partner closely with product management, engineering, customer success, and customers to translate complex workflows into intuitive, elegant user experiences.</p><p>You’ll drive end-to-end design, from discovery and problem definition, through polished execution while contributing to a healthy design culture and elevating craft across the team.</p><p>Key Responsibilities:</p><p>Product Design &amp; Problem Solving</p><ul><li><p>Lead end-to-end design for major product areas, turning complex workflows into intuitive experiences.</p></li><li><p>Explore solutions, validate assumptions, and use insight to guide clear, effective designs.</p></li></ul><p><strong>User Research &amp; Customer Understanding</strong></p><ul><li><p>Conduct or support interviews, usability tests, and feedback sessions.</p></li><li><p>Translate findings into actionable improvements that strengthen the user experience.</p></li></ul><p><strong>Execution, Craft, &amp; Collaboration</strong></p><ul><li><p>Partner closely with engineering and product from scoping through delivery.</p></li><li><p>Communicate design rationale clearly and ensure high-quality implementation.</p></li></ul><p><strong>Design Systems &amp; Consistency</strong></p><ul><li><p>Use and contribute to Suralink’s design system to maintain consistency and scalability.</p></li><li><p>Evolve components, patterns, and documentation as product needs grow.</p></li></ul><p><strong>Agency, Ownership &amp; Critical Thinking</strong></p><ul><li><p>Operate with autonomy, driving clarity and momentum through ambiguity.</p></li><li><p>Challenge assumptions, simplify complexity, and align stakeholders around the best solution.</p></li></ul><p>Experience and Professional Qualifications</p><ul><li><p>4+ years of experience designing for complex SaaS products.</p></li><li><p>Proven experience designing AI or data-driven features (or a strong interest in LLM-enabled interfaces).</p></li><li><p>Proficiency in Figma (Auto Layout, variants, variables, libraries, tokens).</p></li><li><p>Strong portfolio showing systems thinking and ability to ship elegant, cohesive experiences.</p></li><li><p>Experience collaborating closely with engineering and product leadership to shape roadmaps.</p></li><li><p>Excellent communication, documentation, and presentation skills.</p></li><li><p>Understanding of accessibility standards (WCAG) and commitment to inclusive design.</p></li></ul><p>Preferred experience and qualifications</p><ul><li><p>Experience with prompt-based interaction design or conversational UI.</p></li><li><p>Familiarity with front-end frameworks, design tokens, or semantic versioning.</p></li><li><p>Previous work in accounting, fintech, or compliance-driven B2B SaaS.</p></li><li><p>Interest in emerging technologies and how they influence user experience.</p></li></ul><p>Competencies:</p><ul><li><p>Visual Design &amp; Brand: The ability to execute beautiful, high-quality visual design that strengthens the brand.</p></li><li><p>UX &amp; Patterns: The skill of architecting user experiences that are intuitive, consistent, and effective.</p></li><li><p>Process &amp; Toolkit: The efficiency and craft in using the right tools and processes to turn ideas into reality.</p></li><li><p>Customer Obsession: The ability to deeply understand, empathize with, and advocate for the customer through research and data.</p></li><li><p>Product Strategy &amp; Experiments: The ability to align design work with business goals, using data to guide decisions.</p></li><li><p>Communication &amp; Fluency: How effectively a designer shares their work, provides feedback, and works with cross-functional partners.</p></li><li><p>Team &amp; Company Impact: The impact a designer has on the health of the team and the growth of the company.</p></li></ul><p>At Suralink, our values guide everything we do:</p><ul><li><p>Customer Obsessed: We seek to understand those we serve deeply and are committed to serving them better than anyone else.</p></li><li><p>Passionately Motivated: We care about what we do, which drives us to work hard, show grit, and go above and beyond to achieve great outcomes.</p></li><li><p>Constantly Improving: We are eager to learn and grow. Challenges are opportunities to innovate and enhance our solutions.</p></li><li><p>Team Focused: We know that our success is built together. We support one another and celebrate team achievements.</p></li><li><p>Highly Reliable: We demonstrate good judgment, honor our commitments, and are accountable for our results.</p></li></ul><p>Why Suralink?</p><p>There’s a lot to love about working at Suralink! Here are a few of the benefits you can expect:</p><ul><li><p>Remote-friendly policy</p></li><li><p>Medical/vision/dental insurance</p></li><li><p>Life, short-term disability, and long-term disability insurance</p></li><li><p>Generous Paid time off, including flexible floating holidays that you choose</p></li><li><p>Parental leave</p></li><li><p>Professional development allowance</p></li><li><p>Community involvement</p></li></ul><p>Apply Here: <a href="https://www.click2apply.net/WAjKeLu7nO8pMUJL4ikNmb">https://www.click2apply.net/WAjKeLu7nO8pMUJL4ikNmb</a></p><p>PI284534457</p>
',
                    'apply_url' => 'https://hosted-apply.jobtarget.com/job/Sr-Product-Designer-WAjKeLu7nO8pMUJL4ikNmb?applicantGuid=55de6e7a-90bf-45d5-b39f-18f403872ac1&applicant_guid=55de6e7a-90bf-45d5-b39f-18f403872ac1&source=JobTarget%20via%20Dribbble%20Jobs&sourceContext=jtochash%3DWAjK',
                    'created_at' => '2026-05-21 22:14:55',
                    'updated_at' => '2026-05-21 22:14:55',
                    'company_logo' => 'https://cdn.dribbble.com/userupload/47741959/file/a0fce027df2f6569bb35508cca50a421.jpg?resize=24x24',
                    'website' => 'https://hosted-apply.jobtarget.com/job/Sr-Product-Designer-WAjKeLu7nO8pMUJL4ikNmb?applicantGuid=55de6e7a-90bf-45d5-b39f-18f403872ac1&applicant_guid=55de6e7a-90bf-45d5-b39f-18f403872ac1&source=JobTarget%20via%20Dribbble%20Jobs&sourceContext=jtochash%3DWAjK',
                ),
                17 => 
                array (
                    'id' => 18,
                    'poster_id' => 92,
                    'title' => 'Senior Product Designer',
                    'company_name' => 'Marit Health',
                    'location' => 'United States',
                    'job_type' => 'Full-time',
                    'description' => 'About Marit Health
Founded by the same team that built Glassdoor,
Marit Health
is the fastest-growing community and job search platform in medicine. We bring together salary transparency, job search, and community into a modern platform built specifically for clinicians (physicians and advanced practice providers. In just 15 months we\'ve grown to 85,000+ users, and a big part of that growth is that we lead with AI in everything we build. We\'re a team of almost 20, moving fast, and we\'re looking for someone who is inspired by our vision and is ready to build.
Role
We\'re hiring a Design Engineer to join a small, high-output product & growth team alongside a PM, growth marketer, and engineering team.  You\'ll own marketing/brand design as well as lead product design for the growth squad, from early concepts through shipping, and your work will shape the community experience for both web and mobile native.
The "Engineer" in this title is intentional. AI is collapsing EPD roles, and we expect all roles to ship code. That means leading with prototypes instead of Figma for most features, visual QA directly in the codebase, and the ability to ship features independently. This role requires low ego - all members of the team will contribute to UX Design, just as you’ll contribute to product & engineering. You\'ll work closely with our one other Design Engineer and report directly to the Chief Product Officer.
What you\'ll do
Own brand and marketing design - landing pages, growth experiments, and creative assets (as needed).
Lead product design for your squad - working closely with Product on discovery, flows, high-fidelity UI, and handoff (across web and mobile).
Build high-fidelity prototypes using AI-assisted tools that communicate intent clearly enough to reduce back-and-forth with engineering.
Do visual QA in code - inspect, redline, and fix implementation gaps directly in the codebase.
Ship features independently when scope allows, using our component library and design system.
Contribute to and evolve our design system and component library so the whole team moves faster.
Collaborate closely with your PM, growth marketer, engineers, and the broader product team to move from insight to launched feature quickly.
Who you are
5+ years of product design experience, with a portfolio that shows strong systems thinking and high craft.
Fluent with AI prototyping tools (e.g. v0, Vercel, Cursor, Figma Make, Claude Code) and design-to-code workflows.
Comfortable working in code - you\'ve done visual QA in a real codebase, and ideally have shipped features yourself using HTML/CSS, React, or similar.
Comfortable with GitHub - you understand branching, PRs, and can navigate a codebase without needing hand-holding.
Strong in at least one of: brand & marketing design execution, design systems & component libraries, or native mobile (iOS/Android).
Self-directed, pragmatic, and good at knowing when 80% is the right call and when craft actually matters.
Excited to work in a small team where everyone ships.
Bonus: experience at a marketplace, community product, or in healthcare.
Why join Marit
Work alongside the team that built Glassdoor and apply those proven playbooks to medicine.
Your work will be seen by 85,000+ clinicians and growing, helping clinicians make some of the most important career decisions of their lives.
Join before the team scales and make the most of the equity, scope, and ownership that come with being early.
A mission that actually matters: helping every clinician thrive in their career.
Hiring process
Our process includes an initial call with the CPO, another with our current design engineer and PM, and a take-home design exercise and a working session with the team.  Compensation will be competitive and commensurate with level of experience, and conversion to full-time will come with equity.
To apply, email austin@marithealth.com with your portfolio and a brief note on why this role interests you.',
                    'description_html' => '
<h2><strong>About Marit Health</strong></h2><p>Founded by the same team that built Glassdoor, <a href="https://www.marithealth.com">Marit Health</a> is the fastest-growing community and job search platform in medicine. We bring together salary transparency, job search, and community into a modern platform built specifically for clinicians (physicians and advanced practice providers. In just 15 months we\'ve grown to 85,000+ users, and a big part of that growth is that we lead with AI in everything we build. We\'re a team of almost 20, moving fast, and we\'re looking for someone who is inspired by our vision and is ready to build.</p><h2><strong>Role</strong></h2><p>We\'re hiring a Design Engineer to join a small, high-output product &amp; growth team alongside a PM, growth marketer, and engineering team.  You\'ll own marketing/brand design as well as lead product design for the growth squad, from early concepts through shipping, and your work will shape the community experience for both web and mobile native.</p><p>The "Engineer" in this title is intentional. AI is collapsing EPD roles, and we expect all roles to ship code. That means leading with prototypes instead of Figma for most features, visual QA directly in the codebase, and the ability to ship features independently. This role requires low ego - all members of the team will contribute to UX Design, just as you’ll contribute to product &amp; engineering. You\'ll work closely with our one other Design Engineer and report directly to the Chief Product Officer.</p><h2><strong>What you\'ll do</strong></h2><ul><li><p>Own brand and marketing design - landing pages, growth experiments, and creative assets (as needed).</p></li><li><p>Lead product design for your squad - working closely with Product on discovery, flows, high-fidelity UI, and handoff (across web and mobile).</p></li><li><p>Build high-fidelity prototypes using AI-assisted tools that communicate intent clearly enough to reduce back-and-forth with engineering.</p></li><li><p>Do visual QA in code - inspect, redline, and fix implementation gaps directly in the codebase.</p></li><li><p>Ship features independently when scope allows, using our component library and design system.</p></li><li><p>Contribute to and evolve our design system and component library so the whole team moves faster.</p></li><li><p>Collaborate closely with your PM, growth marketer, engineers, and the broader product team to move from insight to launched feature quickly.</p></li></ul><h2><strong>Who you are</strong></h2><ul><li><p>5+ years of product design experience, with a portfolio that shows strong systems thinking and high craft.</p></li><li><p>Fluent with AI prototyping tools (e.g. v0, Vercel, Cursor, Figma Make, Claude Code) and design-to-code workflows.</p></li><li><p>Comfortable working in code - you\'ve done visual QA in a real codebase, and ideally have shipped features yourself using HTML/CSS, React, or similar.</p></li><li><p>Comfortable with GitHub - you understand branching, PRs, and can navigate a codebase without needing hand-holding.</p></li><li><p>Strong in at least one of: brand &amp; marketing design execution, design systems &amp; component libraries, or native mobile (iOS/Android).</p></li><li><p>Self-directed, pragmatic, and good at knowing when 80% is the right call and when craft actually matters.</p></li><li><p>Excited to work in a small team where everyone ships.</p></li><li><p>Bonus: experience at a marketplace, community product, or in healthcare.</p></li></ul><h2><strong>Why join Marit</strong></h2><ul><li><p>Work alongside the team that built Glassdoor and apply those proven playbooks to medicine.</p></li><li><p>Your work will be seen by 85,000+ clinicians and growing, helping clinicians make some of the most important career decisions of their lives.</p></li><li><p>Join before the team scales and make the most of the equity, scope, and ownership that come with being early.</p></li><li><p>A mission that actually matters: helping every clinician thrive in their career.</p></li></ul><h2><strong>Hiring process</strong></h2><p>Our process includes an initial call with the CPO, another with our current design engineer and PM, and a take-home design exercise and a working session with the team.  Compensation will be competitive and commensurate with level of experience, and conversion to full-time will come with equity.</p><p>To apply, email austin@marithealth.com with your portfolio and a brief note on why this role interests you.</p>
',
                    'apply_url' => 'https://www.notion.so/Design-Engineer-Growth-349f57ee9762801d9f8af62837d6e8f8',
                    'created_at' => '2026-05-21 22:14:58',
                    'updated_at' => '2026-05-21 22:14:58',
                    'company_logo' => 'https://cdn.dribbble.com/userupload/47741172/file/f08693e2878b3fd6b44ff1420d0bcb59.png?resize=24x24',
                    'website' => 'https://www.notion.so/Design-Engineer-Growth-349f57ee9762801d9f8af62837d6e8f8',
                ),
                18 => 
                array (
                    'id' => 19,
                    'poster_id' => 60,
                    'title' => 'Lead CG Generalist',
                    'company_name' => 'CELSIUS',
                    'location' => 'Louisville, KY',
                    'job_type' => 'Full-time',
                    'description' => 'At CELSIUS®, we pride ourselves on empowering our people. Every employee has a stake in our success. We create a collaborative culture built on inclusivity, innovation, and a belief that great ideas can come from anywhere.
And we’re on our way to building something bigger: a category where energy isn’t just consumed, it’s lived—where performance meets personality, brand becomes community, and every can crack sparks a statement.
This is the future of modern energy. This is CELSIUS®.
Ready to take your career to the next level? Join our team and redefine what it means to be energized.
Lead CG Generalist
If you are looking for an exciting opportunity to join a fast-growing team in a role that provides professional and personal growth, we encourage you to apply to our
Lead CG Generalist
opening.
We promptly review all applications. Highly qualified candidates will be contacted for interviews. This is an ‘in office’, full time position at the Brand Studio in Louisville, Kentucky.
Reporting to the Director of CG & Emerging Media,
Lead CG Generalist
will oversee a small team of CG Artists to create high-quality 3D imagery and animations for a wide range of high-impact content across multiple platforms, including product campaigns, point-of-sale, digital, social, and print media. This role requires several years of production experience and proven leadership in CG teams, with a strong specialty in photorealistic content for product visualization. You will balance speed, quality, and resources to deliver exceptional results. You will oversee procedural and artistic standards, leading by example. You will provide daily oversight and support to ensure consistency, quality, and efficient throughput, facilitate communication between the Director, the team, and broader Brand Studio partners, and actively advocate for team workload management and morale.
Requirements
8+ years of experience in 3D production, with a strong focus on product visualization and creative executions.
Expertise in 3ds max/VRay or Blender and Adobe Creative Cloud.
Experience in fluid simulations.
Strong generalist capabilities, including modeling, surfacing, lighting, animation, simulation, rendering, and compositing.
Excellent foundational design skills including composition, color theory, and layout.
Demonstrated ability to manage complex production schedules in fast-paced environments.
Exceptional communication and time management skills.
Strong leadership and mentorship abilities with a collaborative mindset.
Comfortable giving and receiving constructive feedback in a professional, solutions-focused manner.
Responsibilities
Produce high-quality CG content including imagery and animations across a variety of digital and print platforms.
Work closely with Creative Directors to interpret and translate 2D concepts into detailed, high-fidelity 3D visual assets.
Lead and support CG Generalists, providing technical and artistic direction on projects.
Participate in daily team check-ins, manage task workloads in collaboration with Project Managers.
Manage workflow, resource allocation, and expectations to ensure streamlined workflows.
Define and document process and procedure.
Maintain high standards of visual accuracy, quality control, and data organization.
Stay up to date with industry trends, emerging tools, and production techniques to continually evolve the team’s capabilities.
Oversee CG-related purchases and manage budgets across various brand initiatives.',
                    'description_html' => '
<p>At CELSIUS®, we pride ourselves on empowering our people. Every employee has a stake in our success. We create a collaborative culture built on inclusivity, innovation, and a belief that great ideas can come from anywhere. </p><p>And we’re on our way to building something bigger: a category where energy isn’t just consumed, it’s lived—where performance meets personality, brand becomes community, and every can crack sparks a statement. </p><p><strong>This is the future of modern energy. This is CELSIUS®.  </strong></p><p>Ready to take your career to the next level? Join our team and redefine what it means to be energized. </p><h1><strong>Lead CG Generalist</strong></h1><p>If you are looking for an exciting opportunity to join a fast-growing team in a role that provides professional and personal growth, we encourage you to apply to our <strong>Lead CG Generalist</strong> opening.</p><p>We promptly review all applications. Highly qualified candidates will be contacted for interviews. This is an ‘in office’, full time position at the Brand Studio in Louisville, Kentucky.</p><p>Reporting to the Director of CG &amp; Emerging Media,<strong> Lead CG Generalist</strong> will oversee a small team of CG Artists to create high-quality 3D imagery and animations for a wide range of high-impact content across multiple platforms, including product campaigns, point-of-sale, digital, social, and print media. This role requires several years of production experience and proven leadership in CG teams, with a strong specialty in photorealistic content for product visualization. You will balance speed, quality, and resources to deliver exceptional results. You will oversee procedural and artistic standards, leading by example. You will provide daily oversight and support to ensure consistency, quality, and efficient throughput, facilitate communication between the Director, the team, and broader Brand Studio partners, and actively advocate for team workload management and morale.</p><h2>Requirements</h2><ul><li><p>8+ years of experience in 3D production, with a strong focus on product visualization and creative executions.</p></li><li><p>Expertise in 3ds max/VRay or Blender and Adobe Creative Cloud.</p></li><li><p>Experience in fluid simulations.</p></li><li><p>Strong generalist capabilities, including modeling, surfacing, lighting, animation, simulation, rendering, and compositing.</p></li><li><p>Excellent foundational design skills including composition, color theory, and layout.</p></li><li><p>Demonstrated ability to manage complex production schedules in fast-paced environments.</p></li><li><p>Exceptional communication and time management skills.</p></li><li><p>Strong leadership and mentorship abilities with a collaborative mindset.</p></li><li><p>Comfortable giving and receiving constructive feedback in a professional, solutions-focused manner.</p><p></p></li></ul><h2><strong>Responsibilities</strong></h2><ul><li><p>Produce high-quality CG content including imagery and animations across a variety of digital and print platforms.</p></li><li><p>Work closely with Creative Directors to interpret and translate 2D concepts into detailed, high-fidelity 3D visual assets.</p></li><li><p>Lead and support CG Generalists, providing technical and artistic direction on projects.</p></li><li><p>Participate in daily team check-ins, manage task workloads in collaboration with Project Managers.</p></li><li><p>Manage workflow, resource allocation, and expectations to ensure streamlined workflows.</p></li><li><p>Define and document process and procedure.</p></li><li><p>Maintain high standards of visual accuracy, quality control, and data organization.</p></li><li><p>Stay up to date with industry trends, emerging tools, and production techniques to continually evolve the team’s capabilities.</p></li><li><p>Oversee CG-related purchases and manage budgets across various brand initiatives.</p></li></ul>
',
                    'apply_url' => 'https://apply.workable.com/celsius/j/50C9C68538/',
                    'created_at' => '2026-05-21 22:15:01',
                    'updated_at' => '2026-05-21 22:15:01',
                    'company_logo' => 'https://cdn.dribbble.com/userupload/47405783/file/ffcef98396671f0d0f88f6088b2605b9.png?resize=24x24',
                    'website' => 'https://apply.workable.com/celsius/j/50C9C68538/',
                ),
                19 => 
                array (
                    'id' => 20,
                    'poster_id' => 58,
                'title' => 'Graphic Designer - Brand (ROCKSTAR®)',
                    'company_name' => 'CELSIUS',
                    'location' => 'Los Angeles, CA',
                    'job_type' => 'Full-time',
                    'description' => 'At Celsius, we pride ourselves on empowering our people. Every employee has a stake in our success. We create a collaborative culture built on inclusivity, innovation, and a belief that great ideas can come from anywhere.
And we’re on our way to building something bigger: a category where energy isn’t just consumed, it’s lived—where performance meets personality, brand becomes community, and every can crack sparks a statement.
This is the future of modern energy. This is Celsius.
Ready to take your career to the next level? Join our team and redefine what it means to be energized.
Graphic Designer - Brand  ROCKSTAR®
As part of our growing portfolio, ROCKSTAR®is a classic energy drink and lifestyle brand rooted in Southern California action sports and music culture. We foster a dynamic, collaborative culture where creativity, innovation, and passion are celebrated. Team members are encouraged to think boldly, move quickly, and help shape a brand that’s redefining what core energy looks and feels like.
People Management Responsibilities:
No
Role Type:
Full-Time
Location:
Celsius\' Office in Los Angeles, CA
Reports to:
Brand Creative Lead (Rockstar)
As the
Graphic Designer – Brand (ROCKSTAR® Energy)
you’ll be a hands-on individual contributor responsible for executing high-quality visual design across packaging, digital campaigns, retail assets, and brand touchpoints. This is your opportunity to grow your design career within a fast-paced consumer packaged goods (CPG) environment, supporting a globally recognized energy drink brand rooted in action sports and music culture. You’ll bring strong executional design skills, attention to detail, and the ability to translate creative direction into compelling, brand-consistent visuals across print, digital, and in-store experiences. This is a full-time, in-office role based in Los Angeles, CA, collaborating closely with cross-functional teams including marketing, copy, and production.
Requirements
Experience
: 2–5 years of experience in graphic design within an agency or in-house creative team
Education
: Bachelor’s degree in Graphic Design, Visual Arts, or a related field
Portfolio demonstrating brand, campaign, and visual design work across multiple channels
Proficiency in Adobe Creative Suite (Photoshop, Illustrator, InDesign) and familiarity with Figma or similar design tools
Strong skills in layout design, typography, color theory, and visual storytelling
Experience executing creative direction with precision and maintaining brand consistency
Ability to manage multiple projects and meet deadlines in a fast-paced environment
Strong communication and cross-functional collaboration skills
Experience working with production teams on print, digital, and retail-ready assets
Familiarity with AI tools (e.g., ChatGPT, MidJourney) to support design workflows and concept development
Knowledge of current design trends, cultural aesthetics, and competitive brand landscapes
3D or CGI design experience is a plus
Responsibilities
Execute packaging, campaign, and retail design assets in alignment with brand guidelines and creative direction
Develop layouts, mockups, and presentations to communicate design concepts effectively
Create visual assets across print, digital, social media, and in-store marketing channels
Support concept development through mood boards, design exploration, and visual research
Assist with photoshoot preparation, including layout planning and creative asset development
Ensure brand consistency across all deliverables and customer-facing touchpoints
Collaborate with cross-functional teams including marketing, copywriting, and project management to deliver integrated campaigns
Work with production partners to ensure all files meet technical specifications and quality standards
Participate in feedback cycles and iterate on designs based on stakeholder input
Stay up to date on industry trends, design tools, and emerging technologies to enhance creative output',
                    'description_html' => '
<p>At Celsius, we pride ourselves on empowering our people. Every employee has a stake in our success. We create a collaborative culture built on inclusivity, innovation, and a belief that great ideas can come from anywhere. </p><p>And we’re on our way to building something bigger: a category where energy isn’t just consumed, it’s lived—where performance meets personality, brand becomes community, and every can crack sparks a statement. </p><p><strong>This is the future of modern energy. This is Celsius.</strong>  </p><p>Ready to take your career to the next level? Join our team and redefine what it means to be energized. </p><h1>Graphic Designer - Brand  ROCKSTAR®</h1><p>As part of our growing portfolio, ROCKSTAR®is a classic energy drink and lifestyle brand rooted in Southern California action sports and music culture. We foster a dynamic, collaborative culture where creativity, innovation, and passion are celebrated. Team members are encouraged to think boldly, move quickly, and help shape a brand that’s redefining what core energy looks and feels like.  </p><p><strong>People Management Responsibilities:</strong> No</p><p><strong>Role Type:</strong> Full-Time</p><p><strong>Location:</strong> Celsius\' Office in Los Angeles, CA</p><p><strong>Reports to: </strong> Brand Creative Lead (Rockstar)</p><p>As the <strong>Graphic Designer – Brand (ROCKSTAR® Energy)</strong> you’ll be a hands-on individual contributor responsible for executing high-quality visual design across packaging, digital campaigns, retail assets, and brand touchpoints. This is your opportunity to grow your design career within a fast-paced consumer packaged goods (CPG) environment, supporting a globally recognized energy drink brand rooted in action sports and music culture. You’ll bring strong executional design skills, attention to detail, and the ability to translate creative direction into compelling, brand-consistent visuals across print, digital, and in-store experiences. This is a full-time, in-office role based in Los Angeles, CA, collaborating closely with cross-functional teams including marketing, copy, and production.</p><h2>Requirements</h2><ul><li><p><strong>Experience</strong>: 2–5 years of experience in graphic design within an agency or in-house creative team</p></li><li><p><strong>Education</strong>: Bachelor’s degree in Graphic Design, Visual Arts, or a related field</p></li><li><p>Portfolio demonstrating brand, campaign, and visual design work across multiple channels</p></li><li><p>Proficiency in Adobe Creative Suite (Photoshop, Illustrator, InDesign) and familiarity with Figma or similar design tools</p></li><li><p>Strong skills in layout design, typography, color theory, and visual storytelling</p></li><li><p>Experience executing creative direction with precision and maintaining brand consistency</p></li><li><p>Ability to manage multiple projects and meet deadlines in a fast-paced environment</p></li><li><p>Strong communication and cross-functional collaboration skills</p></li><li><p>Experience working with production teams on print, digital, and retail-ready assets</p></li><li><p>Familiarity with AI tools (e.g., ChatGPT, MidJourney) to support design workflows and concept development</p></li><li><p>Knowledge of current design trends, cultural aesthetics, and competitive brand landscapes</p></li><li><p>3D or CGI design experience is a plus</p></li></ul><p></p><h2><strong>Responsibilities</strong></h2><ul><li><p>Execute packaging, campaign, and retail design assets in alignment with brand guidelines and creative direction</p></li><li><p>Develop layouts, mockups, and presentations to communicate design concepts effectively</p></li><li><p>Create visual assets across print, digital, social media, and in-store marketing channels</p></li><li><p>Support concept development through mood boards, design exploration, and visual research</p></li><li><p>Assist with photoshoot preparation, including layout planning and creative asset development</p></li><li><p>Ensure brand consistency across all deliverables and customer-facing touchpoints</p></li><li><p>Collaborate with cross-functional teams including marketing, copywriting, and project management to deliver integrated campaigns</p></li><li><p>Work with production partners to ensure all files meet technical specifications and quality standards</p></li><li><p>Participate in feedback cycles and iterate on designs based on stakeholder input</p></li><li><p>Stay up to date on industry trends, design tools, and emerging technologies to enhance creative output</p></li></ul>
',
                    'apply_url' => 'https://apply.workable.com/celsius/?not_found=true',
                    'created_at' => '2026-05-21 22:15:04',
                    'updated_at' => '2026-05-21 22:15:04',
                    'company_logo' => 'https://cdn.dribbble.com/userupload/47486066/file/79d81c0a806291bdd773e2642e831e74.png?resize=24x24',
                    'website' => 'https://apply.workable.com/celsius/?not_found=true',
                ),
                20 => 
                array (
                    'id' => 21,
                    'poster_id' => 20,
                'title' => 'Brand Creative Lead (CELSIUS®)',
                    'company_name' => 'CELSIUS',
                    'location' => 'Boca Raton, FL',
                    'job_type' => 'Full-time',
                    'description' => 'At CELSIUS®, we pride ourselves on empowering our people. Every employee has a stake in our success. We create a collaborative culture built on inclusivity, innovation, and a belief that great ideas can come from anywhere.
And we’re on our way to building something bigger: a category where energy isn’t just consumed, it’s lived—where performance meets personality, brand becomes community, and every can crack sparks a statement.
This is the future of modern energy. This is CELSIUS®.
Ready to take your career to the next level? Join our team and redefine what it means to be energized.
Brand Creative Lead (Celsius)
Reports to: CCO, Brand Studio
The Brand Creative Lead (Celsius) is the senior-most day-to-day creative owner of the Celsius brand, partnering closely with the CCO to shape, protect, and evolve the brand’s visual and verbal expression globally.
This role functions as the creative steward for Celsius—setting the creative vision alongside senior leadership, enforcing brand standards, and ensuring best-in-class execution across all touchpoints in the US and international markets. The Brand Creative Lead is accountable for maintaining consistency, quality, and cultural relevance across packaging, campaigns, POS, innovation, retail, digital, and experiential work.
Equal parts visionary and executor; this role requires someone who can direct and inspire teams while remaining deeply hands-on when needed. The Brand Creative Lead sets the creative bar, provides clear direction and feedback, and ensures that every piece of work reflects the ambition, confidence, and polish expected of a category-defining brand.
Requirements
Portfolio required demonstrating strong brand systems, campaigns, and packaging work
10+ years of experience in brand design within an agency or in-house environment
Proven experience leading and directing creative teams across multiple disciplines
Deep expertise in brand systems, visual identity, and execution at scale across markets
Advanced skills in layout, typography, color theory, illustration, and packaging design
Strong conceptual thinker with the ability to translate strategy into compelling creative
Expert proficiency in Adobe Creative Suite; familiarity with Figma and Microsoft tools a plus
Experience working across print, digital, experiential, and retail environments
Exceptional attention to detail and commitment to high standards of quality
Strong communicator and presenter, comfortable influencing senior stakeholders
Highly collaborative, confident, and decisive creative leader
Comfortable navigating ambiguity, fast-paced workflows, and shifting priorities
Organized, accountable, and self-directed with excellent time management skills
Experience applying AI tools to creative development and workflows
Responsibilities
Partner closely with the CCO to co-lead the overall creative vision and long-term evolution of the Celsius brand
Act as a primary guardian of the Celsius brand system, ensuring consistency of visual identity, tone, and storytelling across all markets, channels, and partners
Own and evolve brand expression across packaging, POS, campaigns, events, digital, merchandise, and innovation, delivering best-in-class, relevant creative
Enforce brand standards globally, reviewing and approving work to ensure alignment across US and international markets
Provide clear creative direction, feedback, and quality control across design, copy, production, CG, and external vendors
Concept and direct brand photoshoots, including treatments, visual references, concept sketches, on-set art direction, and post-production review
Develop and maintain brand frameworks, toolkits, and visual systems that enable teams to execute consistently at scale
Guide the development of brand copy and messaging, ensuring verbal tone, headlines, and storytelling align with the Celsius voice
Lead and mentor designers, art directors, and copywriters—setting expectations, delegating work, and elevating creative output
Collaborate cross-functionally with innovation, marketing, digital, ecommerce, social, and project management teams to bring new ideas to market
Oversee packaging and label design development, balancing innovation with brand cohesion and production realities
Review and approve print-ready and digital-ready assets across all touchpoints
Create moodboards, sketches, and visual references to clearly communicate creative intent
Present and pitch creative concepts to internal stakeholders with confidence and clarity
Manage and brief external creative partners, agencies, and freelancers as needed
Contribute hands-on creative work when required, including layout, typography, illustration, and concept development
Balance creative ambition with business objectives, timelines, and operational constraints
Stay current on design trends, cultural shifts, and the competitive landscape to inform creative evolution
Champion ownership, accountability, and creative excellence across all workstreams
Leverage AI and emerging tools (ChatGPT, Midjourney, etc.) to enhance workflows, accelerate concepting, and unlock new creative approaches',
                        'description_html' => '
<p>At CELSIUS®, we pride ourselves on empowering our people. Every employee has a stake in our success. We create a collaborative culture built on inclusivity, innovation, and a belief that great ideas can come from anywhere. </p><p>And we’re on our way to building something bigger: a category where energy isn’t just consumed, it’s lived—where performance meets personality, brand becomes community, and every can crack sparks a statement. </p><p>This is the future of modern energy. This is CELSIUS®. </p><p> Ready to take your career to the next level? Join our team and redefine what it means to be energized. </p><h2>Brand Creative Lead (Celsius) </h2><p>Reports to: CCO, Brand Studio </p><p>The Brand Creative Lead (Celsius) is the senior-most day-to-day creative owner of the Celsius brand, partnering closely with the CCO to shape, protect, and evolve the brand’s visual and verbal expression globally. </p><p>This role functions as the creative steward for Celsius—setting the creative vision alongside senior leadership, enforcing brand standards, and ensuring best-in-class execution across all touchpoints in the US and international markets. The Brand Creative Lead is accountable for maintaining consistency, quality, and cultural relevance across packaging, campaigns, POS, innovation, retail, digital, and experiential work. </p><p>Equal parts visionary and executor; this role requires someone who can direct and inspire teams while remaining deeply hands-on when needed. The Brand Creative Lead sets the creative bar, provides clear direction and feedback, and ensures that every piece of work reflects the ambition, confidence, and polish expected of a category-defining brand. </p><h2> Requirements</h2><ul><li><p>Portfolio required demonstrating strong brand systems, campaigns, and packaging work </p></li></ul><ul><li><p>10+ years of experience in brand design within an agency or in-house environment </p></li></ul><ul><li><p>Proven experience leading and directing creative teams across multiple disciplines </p></li></ul><ul><li><p>Deep expertise in brand systems, visual identity, and execution at scale across markets </p></li></ul><ul><li><p>Advanced skills in layout, typography, color theory, illustration, and packaging design </p></li></ul><ul><li><p>Strong conceptual thinker with the ability to translate strategy into compelling creative </p></li></ul><ul><li><p>Expert proficiency in Adobe Creative Suite; familiarity with Figma and Microsoft tools a plus </p></li></ul><ul><li><p>Experience working across print, digital, experiential, and retail environments </p></li></ul><ul><li><p>Exceptional attention to detail and commitment to high standards of quality </p></li></ul><ul><li><p>Strong communicator and presenter, comfortable influencing senior stakeholders </p></li></ul><ul><li><p>Highly collaborative, confident, and decisive creative leader </p></li></ul><ul><li><p>Comfortable navigating ambiguity, fast-paced workflows, and shifting priorities </p></li></ul><ul><li><p>Organized, accountable, and self-directed with excellent time management skills </p></li></ul><ul><li><p>Experience applying AI tools to creative development and workflows </p></li></ul><p></p><p><strong>Responsibilities</strong></p><ul><li><p>Partner closely with the CCO to co-lead the overall creative vision and long-term evolution of the Celsius brand </p></li><li><p>Act as a primary guardian of the Celsius brand system, ensuring consistency of visual identity, tone, and storytelling across all markets, channels, and partners </p></li><li><p>Own and evolve brand expression across packaging, POS, campaigns, events, digital, merchandise, and innovation, delivering best-in-class, relevant creative   </p></li><li><p>Enforce brand standards globally, reviewing and approving work to ensure alignment across US and international markets </p></li><li><p>Provide clear creative direction, feedback, and quality control across design, copy, production, CG, and external vendors </p></li><li><p>Concept and direct brand photoshoots, including treatments, visual references, concept sketches, on-set art direction, and post-production review </p></li><li><p>Develop and maintain brand frameworks, toolkits, and visual systems that enable teams to execute consistently at scale </p></li><li><p>Guide the development of brand copy and messaging, ensuring verbal tone, headlines, and storytelling align with the Celsius voice </p></li><li><p>Lead and mentor designers, art directors, and copywriters—setting expectations, delegating work, and elevating creative output </p></li><li><p>Collaborate cross-functionally with innovation, marketing, digital, ecommerce, social, and project management teams to bring new ideas to market </p></li><li><p>Oversee packaging and label design development, balancing innovation with brand cohesion and production realities </p></li><li><p>Review and approve print-ready and digital-ready assets across all touchpoints </p></li><li><p>Create moodboards, sketches, and visual references to clearly communicate creative intent </p></li><li><p>Present and pitch creative concepts to internal stakeholders with confidence and clarity </p></li><li><p>Manage and brief external creative partners, agencies, and freelancers as needed </p></li><li><p>Contribute hands-on creative work when required, including layout, typography, illustration, and concept development </p></li><li><p>Balance creative ambition with business objectives, timelines, and operational constraints </p></li><li><p>Stay current on design trends, cultural shifts, and the competitive landscape to inform creative evolution </p></li><li><p>Champion ownership, accountability, and creative excellence across all workstreams </p></li><li><p>Leverage AI and emerging tools (ChatGPT, Midjourney, etc.) to enhance workflows, accelerate concepting, and unlock new creative approaches </p><p></p></li></ul>
',
                        'apply_url' => 'https://apply.workable.com/celsius/j/CDBE75C6AB/',
                        'created_at' => '2026-05-21 22:15:06',
                        'updated_at' => '2026-05-21 22:15:06',
                        'company_logo' => 'https://cdn.dribbble.com/userupload/47405651/file/645e1f6d0cbcedade8117a8d2742715a.png?resize=24x24',
                        'website' => 'https://apply.workable.com/celsius/j/CDBE75C6AB/',
                    ),
                    21 => 
                    array (
                        'id' => 22,
                        'poster_id' => 58,
                        'title' => 'Senior UX/UI Designer',
                        'company_name' => 'Roomstay.io',
                        'location' => 'Remote',
                        'job_type' => 'Freelance',
                        'description' => 'The role
This is not a job for a generalist. We need someone who lives and breathes the accommodation booking journey, who knows what friction looks like for a traveller comparing a direct booking with
Booking.com
, and who can translate that insight into interfaces that convert.
You\'ll work closely with product and engineering across the full Roomstay platform contributing to UX strategy, shaping flows, and delivering UI that\'s pixel-perfect and intentional at every breakpoint. You\'ll pick up briefs independently, ask the right questions upfront, and produce work that holds up to scrutiny.
What you\'ll work on
Booking engine UI
Guest-facing flows, room selection, rate comparison, and checkout — optimised to convert at every step
Reporting dashboards
Property management tools, rate and availability controls, analytics, and reporting interfaces
Design system
Contributing to a scalable component library across web and mobile breakpoints
New features and experiments
Rapid prototyping and A/B test design for conversion-led product initiatives
What we\'re looking for
Must-haves
Accommodation or travel tech background.
You\'ve worked on a hotel, OTA, short-stay, or travel booking product. You know why a guest abandons. You understand rate logic, room categories, and the booking funnel intuitively.
Pixel-perfect UI execution.
Your Figma files are clean, your asthetic is deliberate, your components are named and nested properly. You don\'t ship "close enough".
Cutting-edge design sensibility.
Your references aren\'t from 2020. You\'re across what\'s emerging in product design — motion, micro-interaction, layout, typography and you bring informed opinions, not trends for trends\' sake.
Strong UX reasoning.
You can contribute to flow architecture and present rationale. You ask clarifying questions before diving in, not after.
Brief-driven and self-directed.
You can take a written brief, interpret it, and return high-quality work without hand-holding. You flag blockers early and manage your own time.
Figma proficiency.
Auto-layout, variables, components, prototyping all second nature. Dev-handoff-ready files as standard.
Bonus
Experience with booking engine, PMS, or channel manager products (Siteminder, Opera, MEWS etc.)
Understanding of conversion rate optimisation and A/B testing in e-commerce or booking contexts
Front-end awareness (HTML/CSS) — can gut-check what\'s buildable
Experience designing for B2B SaaS dashboards as well as consumer-facing interfaces
Motion and animation design for UI feedback and micro-interactions
How we work
We\'re a senior team that moves fast. There are no layers you\'ll work directly with product and engineering, with short feedback loops and clear briefs. We care about quality and turnaround, not hours logged.
This role is remote-first with flexible hours. We operate primarily across APAC and EMEA time zones, so some overlap is expected.
To apply
Show us work from the travel or accommodation space - if it\'s not in your portfolio, tell us about it. Case studies over static screens, but we\'ll take both.
No recruiters. No spec work requests. If we like what we see, we\'ll set up a short call within a few days.',
                        'description_html' => '
<h2>The role</h2><p>This is not a job for a generalist. We need someone who lives and breathes the accommodation booking journey, who knows what friction looks like for a traveller comparing a direct booking with <a href="http://Booking.com">Booking.com</a>, and who can translate that insight into interfaces that convert.</p><p>You\'ll work closely with product and engineering across the full Roomstay platform contributing to UX strategy, shaping flows, and delivering UI that\'s pixel-perfect and intentional at every breakpoint. You\'ll pick up briefs independently, ask the right questions upfront, and produce work that holds up to scrutiny.</p><h2>What you\'ll work on</h2><ul><li><p>Booking engine UI</p></li><li><p>Guest-facing flows, room selection, rate comparison, and checkout — optimised to convert at every step</p></li><li><p>Reporting dashboards</p></li><li><p>Property management tools, rate and availability controls, analytics, and reporting interfaces</p></li><li><p>Design system</p></li><li><p>Contributing to a scalable component library across web and mobile breakpoints</p></li><li><p>New features and experiments</p></li><li><p>Rapid prototyping and A/B test design for conversion-led product initiatives</p></li></ul><h2>What we\'re looking for</h2><p>Must-haves</p><ul><li><p><strong>Accommodation or travel tech background.</strong> You\'ve worked on a hotel, OTA, short-stay, or travel booking product. You know why a guest abandons. You understand rate logic, room categories, and the booking funnel intuitively.</p></li><li><p><strong>Pixel-perfect UI execution.</strong> Your Figma files are clean, your asthetic is deliberate, your components are named and nested properly. You don\'t ship "close enough".</p></li><li><p><strong>Cutting-edge design sensibility.</strong> Your references aren\'t from 2020. You\'re across what\'s emerging in product design — motion, micro-interaction, layout, typography and you bring informed opinions, not trends for trends\' sake.</p></li><li><p><strong>Strong UX reasoning.</strong> You can contribute to flow architecture and present rationale. You ask clarifying questions before diving in, not after.</p></li><li><p><strong>Brief-driven and self-directed.</strong> You can take a written brief, interpret it, and return high-quality work without hand-holding. You flag blockers early and manage your own time.</p></li><li><p><strong>Figma proficiency.</strong> Auto-layout, variables, components, prototyping all second nature. Dev-handoff-ready files as standard.</p></li></ul><p>Bonus</p><ul><li><p>Experience with booking engine, PMS, or channel manager products (Siteminder, Opera, MEWS etc.)</p></li><li><p>Understanding of conversion rate optimisation and A/B testing in e-commerce or booking contexts</p></li><li><p>Front-end awareness (HTML/CSS) — can gut-check what\'s buildable</p></li><li><p>Experience designing for B2B SaaS dashboards as well as consumer-facing interfaces</p></li><li><p>Motion and animation design for UI feedback and micro-interactions</p></li></ul><h2>How we work</h2><p>We\'re a senior team that moves fast. There are no layers you\'ll work directly with product and engineering, with short feedback loops and clear briefs. We care about quality and turnaround, not hours logged.</p><p>This role is remote-first with flexible hours. We operate primarily across APAC and EMEA time zones, so some overlap is expected.</p><h2>To apply</h2><p>Show us work from the travel or accommodation space - if it\'s not in your portfolio, tell us about it. Case studies over static screens, but we\'ll take both.</p><p>No recruiters. No spec work requests. If we like what we see, we\'ll set up a short call within a few days.</p>
',
                        'apply_url' => 'https://roomstay-1744848774.teamtailor.com/jobs/7573424-senior-ux-ui-designer-travel',
                        'created_at' => '2026-05-21 22:15:09',
                        'updated_at' => '2026-05-21 22:15:09',
                        'company_logo' => 'https://cdn.dribbble.com/userupload/47404715/file/bd25f26b7539e6812115fe866f4d8422.png?resize=24x24',
                        'website' => 'https://roomstay-1744848774.teamtailor.com/jobs/7573424-senior-ux-ui-designer-travel',
                    ),
                    22 => 
                    array (
                        'id' => 23,
                        'poster_id' => 64,
                        'title' => 'Senior UX/UI designer',
                        'company_name' => 'nooro',
                        'location' => 'Remote',
                        'job_type' => 'Freelance',
                        'description' => 'Who are we?
Since our start in 2022, Nooro has rapidly evolved into a trailblazer in the wellness industry. Our mission is straightforward: to 11x the health of 11 million individuals while saving them $11,000 in annual medical bills.
With over 2,500 glowing 5-star reviews, our impact is clear. We\'re not just selling products; we\'re changing lives across the world. At Nooro, we\'re driven by challenges, thrive on innovation, and are committed to excellence in every endeavor.
Here’s our website:
https://nooro-us.com/
Who are we looking for?
An expert 3D and 2D Graphic Designer with extensive experience creating product imagery for physical product eCommerce brands, as well as for our app.
We need a talented and passionate Graphic Designer who can bring our products to life through exceptional 3D and 2D design. If you have a keen eye for detail, a fast-paced work ethic, and a deep appreciation for aesthetic and functional design, you might be the perfect fit for nooro.
Key Responsibilities:
Design high-quality 3D models of our products for use across a wide range of content types
Design high-quality 2D images that showcase our products and their unique benefits
Design the contents within our product packaging (instruction manuals, guides, etc.)
Design and develop innovative packaging designs for our product line.
Manipulate existing product photos/UGC content to create high-quality imagery for use across funnels and paid advertising
Requirements:
- Proven experience in BOTH 2D and 3D graphic design, preferably for physical products in eCommerce
- Proficiency in the latest design software (Photoshop, Adobe Illustrator, Blender)
- A Strong portfolio demonstrating high-quality work and attention to detail
- Ability to work independently and as part of a remote team.
- Excellent communication and project management skills.
If you\'re interested, please apply and share a link to a portfolio of your work showing the 2D and 3D assets you have created for eCommerce physical products',
                        'description_html' => '
<p><strong>Who are we?</strong></p><p>Since our start in 2022, Nooro has rapidly evolved into a trailblazer in the wellness industry. Our mission is straightforward: to 11x the health of 11 million individuals while saving them $11,000 in annual medical bills. </p><p>With over 2,500 glowing 5-star reviews, our impact is clear. We\'re not just selling products; we\'re changing lives across the world. At Nooro, we\'re driven by challenges, thrive on innovation, and are committed to excellence in every endeavor.</p><p>Here’s our website: <a href="https://nooro-us.com/">https://nooro-us.com/</a></p><p><strong>Who are we looking for?</strong></p><p>An expert 3D and 2D Graphic Designer with extensive experience creating product imagery for physical product eCommerce brands, as well as for our app.</p><p>We need a talented and passionate Graphic Designer who can bring our products to life through exceptional 3D and 2D design. If you have a keen eye for detail, a fast-paced work ethic, and a deep appreciation for aesthetic and functional design, you might be the perfect fit for nooro.</p><p><strong>Key Responsibilities:</strong></p><ul><li><p>Design high-quality 3D models of our products for use across a wide range of content types</p></li><li><p>Design high-quality 2D images that showcase our products and their unique benefits</p></li><li><p>Design the contents within our product packaging (instruction manuals, guides, etc.)</p></li><li><p>Design and develop innovative packaging designs for our product line.</p></li><li><p>Manipulate existing product photos/UGC content to create high-quality imagery for use across funnels and paid advertising</p></li></ul><p><strong>Requirements:</strong></p><p>- Proven experience in BOTH 2D and 3D graphic design, preferably for physical products in eCommerce</p><p>- Proficiency in the latest design software (Photoshop, Adobe Illustrator, Blender)</p><p>- A Strong portfolio demonstrating high-quality work and attention to detail</p><p>- Ability to work independently and as part of a remote team.</p><p>- Excellent communication and project management skills.</p><p>If you\'re interested, please apply and share a link to a portfolio of your work showing the 2D and 3D assets you have created for eCommerce physical products</p>
',
                        'apply_url' => 'https://docs.google.com/forms/d/e/1FAIpQLSc1HB0WIlPUdygecNkRwuK7rbgOLGbLS-UN8t1LBnYY_P-DhA/viewform',
                        'created_at' => '2026-05-21 22:15:11',
                        'updated_at' => '2026-05-21 22:15:11',
                        'company_logo' => 'https://cdn.dribbble.com/userupload/17206129/file/original-11445b7335f05b506718c7961db3fc31.png?resize=24x24',
                        'website' => 'https://docs.google.com/forms/d/e/1FAIpQLSc1HB0WIlPUdygecNkRwuK7rbgOLGbLS-UN8t1LBnYY_P-DhA/viewform',
                    ),
                    23 => 
                    array (
                        'id' => 24,
                        'poster_id' => 37,
                        'title' => 'Senior UX/UI Designer',
                        'company_name' => 'Cocone Europe OU',
                        'location' => 'London, United Kingdom',
                        'job_type' => 'Freelance',
                        'description' => 'About Us
COCONE EUROPE OÜ is the European subsidiary of Cocone Corporation, a Japanese company known for avatar-based social mobile experiences. We build consumer-facing mobile products focused on emotional connection, engagement, and long-term user relationships.
About the Role
We are looking for a
Senior UI/UX Designer (UI & Design System-led)
based in London (hybrid model) to take creative ownership of the visual experience of a live mobile product on Android and iOS with built-in gamification.
This role is centered on
a full visual redesign of the product and the creation of a scalable design system
that defines how every screen, component, and interaction looks and feels. You will translate our target audience, brand, and emotional positioning into a cohesive, high-craft UI — and continue to refine user flows where they intersect with the visual layer. You will work closely with product managers, engineers, and artists to ensure design decisions are grounded in user needs while supporting business objectives.
What You\'ll Do
Lead an end-to-end visual redesign of a consumer-facing mobile application built in Unity, raising the bar on craft, hierarchy, and emotional tone.
Build and own a scalable design system: typography, color, components, iconography, motion, and usage guidelines.
Translate audience insights, brand positioning, and product goals into a cohesive visual language across all screens and features.
Design high-fidelity UI for core features and systems, ensuring consistency and quality across the product.
Conduct UX audits to identify visual inconsistencies, usability friction, and opportunities to elevate the experience.
Refine user flows, information architecture, and wireframes where they intersect with the visual redesign.
Define UX hypotheses, validate them through testing, and iterate based on insights.
Collaborate closely with product and engineering teams to ensure designs are feasible and faithfully implemented.
Analyze user behavior data, usability testing results, and qualitative feedback to inform design decisions.
Establish clear recommendations for improving usability, consistency, and accessibility.
Requirements
Experience
5+ years of professional product design experience for consumer-facing mobile applications, with a strong portfolio of shipped UI work.
Demonstrated experience building and scaling a design system from the ground up (typography, color, components, iconography, motion).
Proven experience leading a full visual redesign or major UI overhaul of a live product.
Experience owning UI for complex systems and feature sets, not just individual screens.
Strong track record of collaboration with product managers and engineers.
Experience contributing to product improvements tied to engagement or retention metrics.
Skills
Exceptional visual design skills: typography, color theory, layout, hierarchy, iconography, and component design.
Deep understanding of design systems — how to structure, document, and scale them.
Strong sensibility for emotional tone, brand expression, and craft in consumer mobile UI.
Solid understanding of mobile platform conventions and constraints (Android and iOS).
Strong grasp of UX principles, interaction design, and information architecture.
Ability to diagnose UX problems and propose effective, scalable solutions.
High proficiency with modern design tools (Figma or equivalent), including advanced use of components, variables, and tokens.
Ability to clearly articulate design decisions and rationale.
Experience leveraging data, user feedback, and usability testing to guide design decisions.
Understanding and ability to apply gamification principles in UI/UX.
Soft Skills
High level of ownership and accountability.
Strong communication and cross-functional collaboration skills.
Comfort working in an international environment.
Proactive, problem-solving mindset.
Strong attention to product quality and user experience.
Nice to Have
Experience designing for social features, avatar systems, fashion/customization, or emotionally-driven digital experiences.
Experience designing for female-skewing or lifestyle-oriented consumer audiences.
Familiarity with accessibility best practices.
Experience mentoring or guiding other designers.
Experience implementing UI assets in Unity.
Interview Process
Initial Interview (30–45 minutes)
Practical Test (2–3 days)
Design Review & Deep Dive (60–90 minutes)
Final Interview & Offer Discussion (30–40 minutes)
2-Month Probation Period
Full-Time Offer
How to Apply
Please send your application via email to:
talent_uk@cocone.co.jp
Email Subject:
Application for UX/UI Designer – [Your Name]
Required Documents:
Resume (PDF)
Portfolio showcasing
high-fidelity UI work, design system samples, and shipped consumer mobile products
(mandatory)
Please include a brief introduction of yourself in the email body.',
                        'description_html' => '
<p><strong>About Us</strong> COCONE EUROPE OÜ is the European subsidiary of Cocone Corporation, a Japanese company known for avatar-based social mobile experiences. We build consumer-facing mobile products focused on emotional connection, engagement, and long-term user relationships.</p><p><strong>About the Role</strong> We are looking for a <strong>Senior UI/UX Designer (UI &amp; Design System-led)</strong> based in London (hybrid model) to take creative ownership of the visual experience of a live mobile product on Android and iOS with built-in gamification.</p><p>This role is centered on <strong>a full visual redesign of the product and the creation of a scalable design system</strong> that defines how every screen, component, and interaction looks and feels. You will translate our target audience, brand, and emotional positioning into a cohesive, high-craft UI — and continue to refine user flows where they intersect with the visual layer. You will work closely with product managers, engineers, and artists to ensure design decisions are grounded in user needs while supporting business objectives.</p><p><strong>What You\'ll Do</strong></p><ul><li><p>Lead an end-to-end visual redesign of a consumer-facing mobile application built in Unity, raising the bar on craft, hierarchy, and emotional tone.</p></li><li><p>Build and own a scalable design system: typography, color, components, iconography, motion, and usage guidelines.</p></li><li><p>Translate audience insights, brand positioning, and product goals into a cohesive visual language across all screens and features.</p></li><li><p>Design high-fidelity UI for core features and systems, ensuring consistency and quality across the product.</p></li><li><p>Conduct UX audits to identify visual inconsistencies, usability friction, and opportunities to elevate the experience.</p></li><li><p>Refine user flows, information architecture, and wireframes where they intersect with the visual redesign.</p></li><li><p>Define UX hypotheses, validate them through testing, and iterate based on insights.</p></li><li><p>Collaborate closely with product and engineering teams to ensure designs are feasible and faithfully implemented.</p></li><li><p>Analyze user behavior data, usability testing results, and qualitative feedback to inform design decisions.</p></li><li><p>Establish clear recommendations for improving usability, consistency, and accessibility.</p></li></ul><p><strong>Requirements</strong></p><p><em>Experience</em></p><ul><li><p>5+ years of professional product design experience for consumer-facing mobile applications, with a strong portfolio of shipped UI work.</p></li><li><p>Demonstrated experience building and scaling a design system from the ground up (typography, color, components, iconography, motion).</p></li><li><p>Proven experience leading a full visual redesign or major UI overhaul of a live product.</p></li><li><p>Experience owning UI for complex systems and feature sets, not just individual screens.</p></li><li><p>Strong track record of collaboration with product managers and engineers.</p></li><li><p>Experience contributing to product improvements tied to engagement or retention metrics.</p></li></ul><p><em>Skills</em></p><ul><li><p>Exceptional visual design skills: typography, color theory, layout, hierarchy, iconography, and component design.</p></li><li><p>Deep understanding of design systems — how to structure, document, and scale them.</p></li><li><p>Strong sensibility for emotional tone, brand expression, and craft in consumer mobile UI.</p></li><li><p>Solid understanding of mobile platform conventions and constraints (Android and iOS).</p></li><li><p>Strong grasp of UX principles, interaction design, and information architecture.</p></li><li><p>Ability to diagnose UX problems and propose effective, scalable solutions.</p></li><li><p>High proficiency with modern design tools (Figma or equivalent), including advanced use of components, variables, and tokens.</p></li><li><p>Ability to clearly articulate design decisions and rationale.</p></li><li><p>Experience leveraging data, user feedback, and usability testing to guide design decisions.</p></li><li><p>Understanding and ability to apply gamification principles in UI/UX.</p></li></ul><p><em>Soft Skills</em></p><ul><li><p>High level of ownership and accountability.</p></li><li><p>Strong communication and cross-functional collaboration skills.</p></li><li><p>Comfort working in an international environment.</p></li><li><p>Proactive, problem-solving mindset.</p></li><li><p>Strong attention to product quality and user experience.</p></li></ul><p><em>Nice to Have</em></p><ul><li><p>Experience designing for social features, avatar systems, fashion/customization, or emotionally-driven digital experiences.</p></li><li><p>Experience designing for female-skewing or lifestyle-oriented consumer audiences.</p></li><li><p>Familiarity with accessibility best practices.</p></li><li><p>Experience mentoring or guiding other designers.</p></li><li><p>Experience implementing UI assets in Unity.</p></li></ul><p><strong>Interview Process</strong></p><ul><li><p>Initial Interview (30–45 minutes)</p></li><li><p>Practical Test (2–3 days)</p></li><li><p>Design Review &amp; Deep Dive (60–90 minutes)</p></li><li><p>Final Interview &amp; Offer Discussion (30–40 minutes)</p></li><li><p>2-Month Probation Period</p></li><li><p>Full-Time Offer</p></li></ul><p><strong>How to Apply</strong></p><ul><li><p>Please send your application via email to: <a href="mailto:talent_uk@cocone.co.jp"><strong>talent_uk@cocone.co.jp</strong></a></p><p></p><ul><li><p><strong>Email Subject:</strong> Application for UX/UI Designer – [Your Name]</p></li><li><p><strong>Required Documents:</strong></p><p></p><ul><li><p>Resume (PDF)</p></li><li><p>Portfolio showcasing <strong>high-fidelity UI work, design system samples, and shipped consumer mobile products</strong> (mandatory)</p><p></p></li><li><p>Please include a brief introduction of yourself in the email body.</p><p></p></li></ul></li></ul></li></ul>
',
                        'apply_url' => 'https://cocone-eu.ee/',
                        'created_at' => '2026-05-21 22:15:14',
                        'updated_at' => '2026-05-21 22:15:14',
                        'company_logo' => 'https://cdn.dribbble.com/userupload/47733666/file/dd744cf7039a9d304c00496bfe11d210.png?resize=24x24',
                        'website' => 'https://cocone-eu.ee/',
                    ),
                    24 => 
                    array (
                        'id' => 25,
                        'poster_id' => 19,
                        'title' => 'Product Designer',
                        'company_name' => 'Edra',
                        'location' => 'New York City, NY',
                        'job_type' => 'Full-time',
                        'description' => 'Edra is solving one of the hardest problems in enterprise AI: AI models are generic but company processes are specific. We build AI agents that learn how a company\'s operational processes actually run, and then run their operations.
We\'re a Series A startup, backed by Sequoia and other leading VC firms, and we\'re growing our team in New York and London. We\'re a deeply technical team of engineers, AI researchers, and strategists with a high bar for talent and a shared belief that exceptional people are the foundation of everything great we\'ll build.
We\'re looking for a Product Designer to shape the experiences our customers interact with every day. You\'ll work across the full design process–from early research and ideation through to polished, shipping designs–collaborating closely with engineering and other stakeholders. We don\'t have product managers, so you\'ll have real ownership over what gets built and why, not just how it looks.
What You\'ll Do
Own design for key product areas, taking ambiguous problems and turning them into clear, elegant solutions
Conduct user research to understand needs, pain points, and how people actually use what we build
Create wireframes, prototypes, and high-fidelity interfaces to explore and validate ideas
Partner directly with engineers to bring your work to life–and iterate based on what you learn once it ships
Contribute to our design system and establish patterns that scale across the product
You Might be a Fit if…
You have 5+ years of experience designing digital products, with a portfolio that demonstrates end-to-end product thinking (not just visual polish)
You\'re proficient with modern design tools (Figma or equivalent)
You\'re comfortable with ambiguity and energized by open-ended problems where the right solution isn\'t obvious yet
You can advocate strongly for your ideas while remaining genuinely open to feedback and debate
You\'re curious about how people use the things you build–not just whether the designs look right, but whether they actually work
You have some familiarity with user research methods and front-end development constraints, even if those aren\'t your primary strengths
Don’t meet all of the above traits? We’d still love to hear from you. We’re looking for exceptional people with unique skills and interests, and we know that great people have different backgrounds and skillsets.',
                        'description_html' => '
<p>Edra is solving one of the hardest problems in enterprise AI: AI models are generic but company processes are specific. We build AI agents that learn how a company\'s operational processes actually run, and then run their operations.</p><p>We\'re a Series A startup, backed by Sequoia and other leading VC firms, and we\'re growing our team in New York and London. We\'re a deeply technical team of engineers, AI researchers, and strategists with a high bar for talent and a shared belief that exceptional people are the foundation of everything great we\'ll build.</p><p>We\'re looking for a Product Designer to shape the experiences our customers interact with every day. You\'ll work across the full design process–from early research and ideation through to polished, shipping designs–collaborating closely with engineering and other stakeholders. We don\'t have product managers, so you\'ll have real ownership over what gets built and why, not just how it looks.</p><p><strong>What You\'ll Do</strong></p><ul><li><p>Own design for key product areas, taking ambiguous problems and turning them into clear, elegant solutions</p></li><li><p>Conduct user research to understand needs, pain points, and how people actually use what we build</p></li><li><p>Create wireframes, prototypes, and high-fidelity interfaces to explore and validate ideas</p></li><li><p>Partner directly with engineers to bring your work to life–and iterate based on what you learn once it ships</p></li><li><p>Contribute to our design system and establish patterns that scale across the product</p></li></ul><p><strong>You Might be a Fit if…</strong></p><ul><li><p>You have 5+ years of experience designing digital products, with a portfolio that demonstrates end-to-end product thinking (not just visual polish)</p></li><li><p>You\'re proficient with modern design tools (Figma or equivalent)</p></li><li><p>You\'re comfortable with ambiguity and energized by open-ended problems where the right solution isn\'t obvious yet</p></li><li><p>You can advocate strongly for your ideas while remaining genuinely open to feedback and debate</p></li><li><p>You\'re curious about how people use the things you build–not just whether the designs look right, but whether they actually work</p></li><li><p>You have some familiarity with user research methods and front-end development constraints, even if those aren\'t your primary strengths</p></li></ul><p></p><p>Don’t meet all of the above traits? We’d still love to hear from you. We’re looking for exceptional people with unique skills and interests, and we know that great people have different backgrounds and skillsets.</p>
',
                        'apply_url' => 'https://jobs.ashbyhq.com/edra/3e46781a-8762-4d86-941c-7477affa1a07?departmentId=37e0a3be-3ea3-4210-8db7-855e4ab74ad7&locationId=7b4f0447-9d41-44f7-b2b8-e1361232ce9f&utm_source=dribbble',
                        'created_at' => '2026-05-21 22:15:16',
                        'updated_at' => '2026-05-21 22:15:16',
                        'company_logo' => 'https://cdn.dribbble.com/userupload/47393644/file/0129afda6630761fd3aa43db369feb54.png?resize=24x24',
                        'website' => 'https://jobs.ashbyhq.com/edra/3e46781a-8762-4d86-941c-7477affa1a07?departmentId=37e0a3be-3ea3-4210-8db7-855e4ab74ad7&locationId=7b4f0447-9d41-44f7-b2b8-e1361232ce9f&utm_source=dribbble',
                    ),
                    25 => 
                    array (
                        'id' => 26,
                        'poster_id' => 36,
                        'title' => 'Product Design Lead',
                        'company_name' => 'AirOps',
                        'location' => 'New York City, NY',
                        'job_type' => 'Full-time',
                        'description' => 'About AirOps
We are building AirOps to become the best place for businesses to experiment, deploy and scale LLM powered workflows and solutions with little to no code. We have raised $7 million led by Wing VC with participation from Founder Collective, XFund, Village Global, Apollo Projects and Lachy Groom. We are a global team of 14 based in San Francisco, Miami, Belgium and Uruguay.
About the Role
We are looking for an ambitious ux designer that has a track record of delivering delightful experiences in semi-technical or no/low-code tools. You would be owning many of the core interaction challenges in our builder, AirOps Studio including helping users design great prompts, connect third party tools, construct powerful AI assistants and more. If you are excited about helping non-developers create amazing things with LLMs like GPT-4, this is the role of you.
What you’ll own:
* Scope and design high utility features and flows for AirOps Studio
* Be thoughtful about naming and design conventions, inline help and onboarding flows
* Develop storyboards, wireframes, mockups, and prototypes to effectively communicate design intent.
* Collaborate closely with customers and engineers.
* Facilitate design reviews, providing valuable insights and feedback for successful implementation.
* Stay updated on industry trends, best practices, and emerging UX technologies to share insights with the team.
* Widely use other tools in the space and share findings with the team.
* Manage engineering final-mile design and usabaility QA and be a champion for a high quality finished product.
Your Experience
* Proven experience as a product and design owner on technical products, with a strong focus on UX
* Proficiency in design tools (we live in Figma)
* You are happy to operating and owning tasks outside your core competancy
* You are a strong communicator and project owner in a fully remote team
* Ability to work in a fast-paced, iterative design environment, manage multiple projects and a healthy amount of early stage ambiguity
* Familiarity with front-end development and its impact on design implementation, and having a strong aesthetic sense is a big bonus.
Benefits:
* Highly competitive equity with early exercise
* Generous Health, Dental, Vision, and Life benefits
* Annual team offsite
* A fun-loving and (just a bit) nerdy team that loves to move fast!',
                            'description_html' => '
<p><strong>About AirOps</strong></p><p>We are building AirOps to become the best place for businesses to experiment, deploy and scale LLM powered workflows and solutions with little to no code. We have raised $7 million led by Wing VC with participation from Founder Collective, XFund, Village Global, Apollo Projects and Lachy Groom. We are a global team of 14 based in San Francisco, Miami, Belgium and Uruguay.</p><p><strong>About the Role</strong></p><p>We are looking for an ambitious ux designer that has a track record of delivering delightful experiences in semi-technical or no/low-code tools. You would be owning many of the core interaction challenges in our builder, AirOps Studio including helping users design great prompts, connect third party tools, construct powerful AI assistants and more. If you are excited about helping non-developers create amazing things with LLMs like GPT-4, this is the role of you. </p><p><strong>What you’ll own:</strong></p><p>* Scope and design high utility features and flows for AirOps Studio  </p><p>* Be thoughtful about naming and design conventions, inline help and onboarding flows</p><p>* Develop storyboards, wireframes, mockups, and prototypes to effectively communicate design intent.</p><p>* Collaborate closely with customers and engineers.</p><p>* Facilitate design reviews, providing valuable insights and feedback for successful implementation.</p><p>* Stay updated on industry trends, best practices, and emerging UX technologies to share insights with the team.</p><p>* Widely use other tools in the space and share findings with the team. </p><p>* Manage engineering final-mile design and usabaility QA and be a champion for a high quality finished product. </p><p><strong>Your Experience</strong></p><p>* Proven experience as a product and design owner on technical products, with a strong focus on UX</p><p>* Proficiency in design tools (we live in Figma)</p><p>* You are happy to operating and owning tasks outside your core competancy</p><p>* You are a strong communicator and project owner in a fully remote team</p><p>* Ability to work in a fast-paced, iterative design environment, manage multiple projects and a healthy amount of early stage ambiguity</p><p>* Familiarity with front-end development and its impact on design implementation, and having a strong aesthetic sense is a big bonus.</p><p><strong>Benefits:</strong></p><p>* Highly competitive equity with early exercise</p><p>* Generous Health, Dental, Vision, and Life benefits</p><p>* Annual team offsite</p><p>* A fun-loving and (just a bit) nerdy team that loves to move fast!</p>
',
                            'apply_url' => 'https://apply.workable.com/celsius/?not_found=true',
                            'created_at' => '2026-05-21 22:15:19',
                            'updated_at' => '2026-05-21 22:15:19',
                            'company_logo' => 'https://cdn.dribbble.com/userupload/12686180/file/original-bbeb9cedec9b8e128ed01c3f4105a343.com?resize=24x24',
                            'website' => 'https://apply.workable.com/celsius/?not_found=true',
                        ),
                        26 => 
                        array (
                            'id' => 27,
                            'poster_id' => 25,
                        'title' => 'Digital Designer (UI/UX)',
                            'company_name' => 'Userism',
                            'location' => 'Remote',
                            'job_type' => 'Full-time',
                            'description' => 'About the role
We\'re looking for a Digital Designer with a strong UI/UX focus to join our team on a remote basis. You\'ll work across the full design process, from early UX thinking through to polished, production-ready UI, on a varied mix of web, eCommerce, and app projects for clients in manufacturing, retail, and B2B services.
You\'ll be involved from early discovery through to final handover, with real ownership of your work rather than just executing on someone else\'s thinking. As a remote team member, you\'ll need to be confident working independently, communicating clearly in writing, and collaborating across time zones.
We\'re a remote-first team, but we also have an office in the Greater Manchester area, so if you\'re local and prefer a hybrid setup, that works for us too.
https://userism.agency/careers/digital-designer-remote
What you\'ll be doing
Your day-to-day will span the full design lifecycle, including:
UX & Discovery
Contributing to (and occasionally leading) remote project discovery workshops
Competitor analysis, content and feature reviews
Persona building, empathy mapping, and user journey development
Information architecture and user flow design
Low and high fidelity wireframing across multiple devices
UI & Visual Design
Designing clean, modern, accessible interfaces for websites, eCommerce platforms, and apps
Creating layout systems, typography, colour schemes, and component libraries
Responsive design with careful consideration for all screen sizes and browsers
Building interactive prototypes and presenting concepts to clients and stakeholders
Working within Atomic Design principles to build reusable, maintainable component systems
Collaboration & Delivery
Working closely with developers (often asynchronously) to ensure accurate handover and implementation
Participating in design reviews and stakeholder presentations via video calls
Contributing to QA and heuristic evaluation at project delivery stages
Documenting design decisions clearly so the wider team can pick them up without context loss
Skills & experience
We\'re looking for someone who can demonstrate genuine ability across both UX and UI. Not just familiarity, but a solid portfolio of real-world work. Specifically:
5+ years of professional UI/UX or digital design experience
A strong portfolio showing end-to-end design work, from early UX through to final UI
Confident written and verbal communication, particularly important in a remote setting
A structured approach to problem-solving and information architecture
Proficiency in Figma (Adobe XD a plus), and comfort switching between tools as needed
Proficiency in Adobe Creative Suite (Illustrator, Photoshop)
Experience with responsive and accessible design (WCAG familiarity welcome)
Familiarity with Atomic Design methodology is a strong advantage
Self-motivated, organised, and able to manage your own time across projects
An eye for detail and a genuine interest in how people interact with digital products
What we\'re like
Userism is a digital design and development agency, remote-first, with team members spread across multiple countries and a base in Ancoats, Manchester. We work with clients in manufacturing, retail, and B2B, designing digital products that are clean, considered, and genuinely useful. We take the craft seriously and are constantly looking to improve our process and practice.
We\'ve adopted Atomic Design as our preferred methodology for component-based web layouts, and we\'re always open to new ideas and approaches. We want people who\'ll add to how we think and work, not just slot in and execute.
Salary
£30,000 - £45,000 per year, depending on experience.
Please note:
we do not need any help from recruitment agents or consultants at this time, thanks.',
                            'description_html' => '
<h2><strong>About the role</strong></h2><p>We\'re looking for a Digital Designer with a strong UI/UX focus to join our team on a remote basis. You\'ll work across the full design process, from early UX thinking through to polished, production-ready UI, on a varied mix of web, eCommerce, and app projects for clients in manufacturing, retail, and B2B services.</p><p>You\'ll be involved from early discovery through to final handover, with real ownership of your work rather than just executing on someone else\'s thinking. As a remote team member, you\'ll need to be confident working independently, communicating clearly in writing, and collaborating across time zones.</p><p>We\'re a remote-first team, but we also have an office in the Greater Manchester area, so if you\'re local and prefer a hybrid setup, that works for us too.</p><p><a href="https://userism.agency/careers/digital-designer-remote">https://userism.agency/careers/digital-designer-remote</a></p><h2><strong>What you\'ll be doing</strong></h2><p>Your day-to-day will span the full design lifecycle, including:</p><p><strong>UX &amp; Discovery</strong></p><ul><li><p>Contributing to (and occasionally leading) remote project discovery workshops</p></li><li><p>Competitor analysis, content and feature reviews</p></li><li><p>Persona building, empathy mapping, and user journey development</p></li><li><p>Information architecture and user flow design</p></li><li><p>Low and high fidelity wireframing across multiple devices</p></li></ul><p><strong>UI &amp; Visual Design</strong></p><ul><li><p>Designing clean, modern, accessible interfaces for websites, eCommerce platforms, and apps</p></li><li><p>Creating layout systems, typography, colour schemes, and component libraries</p></li><li><p>Responsive design with careful consideration for all screen sizes and browsers</p></li><li><p>Building interactive prototypes and presenting concepts to clients and stakeholders</p></li><li><p>Working within Atomic Design principles to build reusable, maintainable component systems</p></li></ul><p><strong>Collaboration &amp; Delivery</strong></p><ul><li><p>Working closely with developers (often asynchronously) to ensure accurate handover and implementation</p></li><li><p>Participating in design reviews and stakeholder presentations via video calls</p></li><li><p>Contributing to QA and heuristic evaluation at project delivery stages</p></li><li><p>Documenting design decisions clearly so the wider team can pick them up without context loss</p></li></ul><h2><strong>Skills &amp; experience</strong></h2><p>We\'re looking for someone who can demonstrate genuine ability across both UX and UI. Not just familiarity, but a solid portfolio of real-world work. Specifically:</p><ul><li><p>5+ years of professional UI/UX or digital design experience</p></li><li><p>A strong portfolio showing end-to-end design work, from early UX through to final UI</p></li><li><p>Confident written and verbal communication, particularly important in a remote setting</p></li><li><p>A structured approach to problem-solving and information architecture</p></li><li><p>Proficiency in Figma (Adobe XD a plus), and comfort switching between tools as needed</p></li><li><p>Proficiency in Adobe Creative Suite (Illustrator, Photoshop)</p></li><li><p>Experience with responsive and accessible design (WCAG familiarity welcome)</p></li><li><p>Familiarity with Atomic Design methodology is a strong advantage</p></li><li><p>Self-motivated, organised, and able to manage your own time across projects</p></li><li><p>An eye for detail and a genuine interest in how people interact with digital products</p></li></ul><h2><strong>What we\'re like</strong></h2><p>Userism is a digital design and development agency, remote-first, with team members spread across multiple countries and a base in Ancoats, Manchester. We work with clients in manufacturing, retail, and B2B, designing digital products that are clean, considered, and genuinely useful. We take the craft seriously and are constantly looking to improve our process and practice.</p><p>We\'ve adopted Atomic Design as our preferred methodology for component-based web layouts, and we\'re always open to new ideas and approaches. We want people who\'ll add to how we think and work, not just slot in and execute.</p><h2><strong>Salary</strong></h2><p>£30,000 - £45,000 per year, depending on experience.</p><h2></h2><p></p><p><strong>Please note:</strong> we do not need any help from recruitment agents or consultants at this time, thanks.</p>
',
                            'apply_url' => 'https://userism.agency/careers/digital-designer-remote',
                            'created_at' => '2026-05-21 22:15:21',
                            'updated_at' => '2026-05-21 22:15:21',
                            'company_logo' => 'https://cdn.dribbble.com/userupload/47721756/file/f176bea8770d88a25025f430905e4096.png?resize=24x24',
                            'website' => 'https://userism.agency/careers/digital-designer-remote',
                        ),
                        27 => 
                        array (
                            'id' => 28,
                            'poster_id' => 52,
                            'title' => 'Logo Designer & UI Dashboard Designer',
                            'company_name' => 'Flowtelligence AI',
                            'location' => 'Remote',
                            'job_type' => 'Freelance',
                            'description' => 'Company Description:
Flowtelligence AI is the labor intelligence platform that turns operations into a measurable performance improvement loop for hospitality operators. We connect forecasting, scheduling, and actuals in real time helping property managers, finance directors, and portfolio VPs make better staffing decisions with precision, not guesswork.
Role Needed:
Flowtelligence AI is the operating system for labor intelligence in hospitality. Our users are property GMs, finance directors, and portfolio VPs managing 1 to 130 hotels. They need clarity without paralysis. Four numbers. One view. No spreadsheets.
We have a Lovable app developed, that has gotten us to this phase. Now, we\'re looking for a designer who works at the intersection of brand identity and UI design to bring this to life. We\'re seeking someone who can build a visual system that makes our app feel like a financial terminal for hotel operators, not a scheduling app for consumers. Think precision instruments, not consumer software.
What You\'ll Deliver
Phase 1: Brand & UI Foundation
Logo system (primary, secondary)
Basic brand guidance (typography system, color palette)
UI design foundations (buttons, type pairing, component library patterns)
Data visualization styles (chart types, table treatments, variance indicators)
Key UI mockups (dashboard views, core workflows to test the system. Just a mockup example is fine in this phase)
Phase 2: Pitch Deck Redesign
Once the brand system is established, you\'ll have the opportunity to redesign our investor pitch deck in Google Slides, Figma Slides or PowerPoint. This deck needs to visually demonstrate that Flowtelligence is the category leader in labor intelligence.
All deliverables from Phase 1 will be handed off to a development agency building the application. Your work defines how Flowtelligence looks and feels in market.
What We\'re Looking For
Your work is at the intersection of brand and product design. You\'ve built visual identities and designed the interfaces that live inside them. Your portfolio demonstrates:
Brand identity development experience — you\'ve built complete visual systems from strategy through execution, not just logo design
Data-heavy UI experience — dashboards, analytics tools, B2B SaaS, or financial interfaces
Design that prioritizes clarity and precision over decoration
Expert-level proficiency in Figma and Adobe Creative Suite
Presentation or sales deck work that demonstrates brand application (If youre not able to do Phase 2, we can pivot to another contract. There will be plenty of work!)
You can articulate design decisions in terms of user goals and technical constraints. You understand the difference between designing for operators (speed, density, clarity) versus consumers (delight, simplicity, aesthetics).',
                                'description_html' => '
<h2><strong>Company Description:</strong></h2><p>Flowtelligence AI is the labor intelligence platform that turns operations into a measurable performance improvement loop for hospitality operators. We connect forecasting, scheduling, and actuals in real time helping property managers, finance directors, and portfolio VPs make better staffing decisions with precision, not guesswork.</p><h2><strong>Role Needed:</strong></h2><p>Flowtelligence AI is the operating system for labor intelligence in hospitality. Our users are property GMs, finance directors, and portfolio VPs managing 1 to 130 hotels. They need clarity without paralysis. Four numbers. One view. No spreadsheets.</p><p>We have a Lovable app developed, that has gotten us to this phase. Now, we\'re looking for a designer who works at the intersection of brand identity and UI design to bring this to life. We\'re seeking someone who can build a visual system that makes our app feel like a financial terminal for hotel operators, not a scheduling app for consumers. Think precision instruments, not consumer software.</p><h2><strong>What You\'ll Deliver</strong></h2><p><strong>Phase 1: Brand &amp; UI Foundation</strong></p><ul><li><p>Logo system (primary, secondary)</p></li><li><p>Basic brand guidance (typography system, color palette)</p></li><li><p>UI design foundations (buttons, type pairing, component library patterns)</p></li><li><p>Data visualization styles (chart types, table treatments, variance indicators)</p></li><li><p>Key UI mockups (dashboard views, core workflows to test the system. Just a mockup example is fine in this phase)</p></li></ul><p><strong>Phase 2: Pitch Deck Redesign</strong> Once the brand system is established, you\'ll have the opportunity to redesign our investor pitch deck in Google Slides, Figma Slides or PowerPoint. This deck needs to visually demonstrate that Flowtelligence is the category leader in labor intelligence.</p><p>All deliverables from Phase 1 will be handed off to a development agency building the application. Your work defines how Flowtelligence looks and feels in market.</p><h2><strong>What We\'re Looking For</strong></h2><p>Your work is at the intersection of brand and product design. You\'ve built visual identities and designed the interfaces that live inside them. Your portfolio demonstrates:</p><ul><li><p>Brand identity development experience — you\'ve built complete visual systems from strategy through execution, not just logo design</p></li><li><p>Data-heavy UI experience — dashboards, analytics tools, B2B SaaS, or financial interfaces</p></li><li><p>Design that prioritizes clarity and precision over decoration</p></li><li><p>Expert-level proficiency in Figma and Adobe Creative Suite</p></li><li><p>Presentation or sales deck work that demonstrates brand application (If youre not able to do Phase 2, we can pivot to another contract. There will be plenty of work!)</p></li></ul><p>You can articulate design decisions in terms of user goals and technical constraints. You understand the difference between designing for operators (speed, density, clarity) versus consumers (delight, simplicity, aesthetics).</p>
',
                                'apply_url' => 'https://docs.google.com/forms/d/e/1FAIpQLSfkq53aB0r-0X9KcE830alUucoJruQn_w7AOHFAv6Yl2w995g/viewform',
                                'created_at' => '2026-05-21 22:15:24',
                                'updated_at' => '2026-05-21 22:15:24',
                                'company_logo' => 'https://cdn.dribbble.com/userupload/47385431/file/199bbd9ec193c46153bcdf41250cfa56.png?resize=24x24',
                                'website' => 'https://docs.google.com/forms/d/e/1FAIpQLSfkq53aB0r-0X9KcE830alUucoJruQn_w7AOHFAv6Yl2w995g/viewform',
                            ),
                            28 => 
                            array (
                                'id' => 29,
                                'poster_id' => 40,
                                'title' => 'Graphic Designer',
                                'company_name' => 'Snapdragon Cann. Co.',
                                'location' => 'Chattanooga, TN',
                                'job_type' => 'Full-time',
                                'description' => 'Graphic Designer:
Snapdragon Cannabis Co.
About the Role
Snapdragon Cannabis Co. is looking for a Graphic Designer to take an active role in shaping the visual direction of our brand across digital and print platforms.
This role is ideal for a designer who enjoys working across a variety of mediums, from digital campaigns to packaging, and who brings both creativity and strategic thinking to their work. You will not only execute design projects but also help guide creative direction, contribute ideas, and elevate the overall brand experience.
You will be instrumental in defining how Snapdragon presents itself visually, supporting everything from product launches and marketing campaigns to print materials and select social content.
Why This Role Matters
As a key member of the marketing team, your work will directly impact how customers engage with and perceive the Snapdragon brand. You will help translate ideas into compelling visual experiences that connect across multiple channels and touchpoints.
What You’ll Do
Develop creative assets for digital and print campaigns, product launches, and trade events
Design social media graphics, email templates, website visuals, and marketing materials
Create print-ready files for catalogs, brochures, retail displays, and signage
Produce digital ads for Meta platforms including Facebook and Instagram
Ensure all final deliverables are accurate, polished, and production-ready
Research competitors and industry benchmarks
Contribute creative ideas for campaigns, launches, and seasonal initiatives
Required Skills and Experience
Bachelor’s degree in Graphic Design, Visual Communication, or a related discipline
3 to 5 years of professional design experience
Advanced proficiency in Adobe Creative Suite including InDesign, Photoshop, and Illustrator
Experience designing for social media platforms, especially Instagram
Strong background in digital design including advertising, email, and web assets
Experience with print design and production including catalogs, brochures, and signage
Solid understanding of print production processes and specifications
Interest in or experience incorporating AI tools into creative workflows
Basic video editing skills using tools such as CapCut, Adobe Express, or InShot
Comfortable working with new tools and adapting to evolving technologies
Ideal Candidate
Demonstrates strong skills in typography, layout, and visual composition
Brings a conceptual approach to design, not just execution
Highly organized with strong attention to detail
Able to manage multiple priorities in a fast-paced environment
Collaborative, proactive, and motivated to contribute creatively
Bonus If
Experience developing brand identities from concept through final guidelines
Familiarity with tools such as Figma, After Effects, or Keynote
Exposure to motion graphics, UX/UI, or environmental design
Experience working alongside photographers, illustrators, or production teams
Portfolio Requirement
A portfolio showcasing relevant work is required for consideration.
If you are excited about creating impactful, thoughtful design and want to help shape a growing brand, we encourage you to apply.
Salary Range:
$45,000 to $55,000',
                                'description_html' => '
<p><strong>Graphic Designer: </strong>Snapdragon Cannabis Co.</p><p><strong>About the Role</strong> Snapdragon Cannabis Co. is looking for a Graphic Designer to take an active role in shaping the visual direction of our brand across digital and print platforms.</p><p>This role is ideal for a designer who enjoys working across a variety of mediums, from digital campaigns to packaging, and who brings both creativity and strategic thinking to their work. You will not only execute design projects but also help guide creative direction, contribute ideas, and elevate the overall brand experience.</p><p>You will be instrumental in defining how Snapdragon presents itself visually, supporting everything from product launches and marketing campaigns to print materials and select social content.</p><p><strong>Why This Role Matters</strong> As a key member of the marketing team, your work will directly impact how customers engage with and perceive the Snapdragon brand. You will help translate ideas into compelling visual experiences that connect across multiple channels and touchpoints.</p><p><strong>What You’ll Do</strong></p><ul><li><p>Develop creative assets for digital and print campaigns, product launches, and trade events</p></li><li><p>Design social media graphics, email templates, website visuals, and marketing materials</p></li><li><p>Create print-ready files for catalogs, brochures, retail displays, and signage</p></li><li><p>Produce digital ads for Meta platforms including Facebook and Instagram</p></li><li><p>Ensure all final deliverables are accurate, polished, and production-ready</p></li><li><p>Research competitors and industry benchmarks</p></li><li><p>Contribute creative ideas for campaigns, launches, and seasonal initiatives</p></li></ul><p><strong>Required Skills and Experience</strong></p><ul><li><p>Bachelor’s degree in Graphic Design, Visual Communication, or a related discipline</p></li><li><p>3 to 5 years of professional design experience</p></li><li><p>Advanced proficiency in Adobe Creative Suite including InDesign, Photoshop, and Illustrator</p></li><li><p>Experience designing for social media platforms, especially Instagram</p></li><li><p>Strong background in digital design including advertising, email, and web assets</p></li><li><p>Experience with print design and production including catalogs, brochures, and signage</p></li><li><p>Solid understanding of print production processes and specifications</p></li><li><p>Interest in or experience incorporating AI tools into creative workflows</p></li><li><p>Basic video editing skills using tools such as CapCut, Adobe Express, or InShot</p></li><li><p>Comfortable working with new tools and adapting to evolving technologies</p></li></ul><p><strong>Ideal Candidate</strong></p><ul><li><p>Demonstrates strong skills in typography, layout, and visual composition</p></li><li><p>Brings a conceptual approach to design, not just execution</p></li><li><p>Highly organized with strong attention to detail</p></li><li><p>Able to manage multiple priorities in a fast-paced environment</p></li><li><p>Collaborative, proactive, and motivated to contribute creatively</p></li></ul><p><strong>Bonus If</strong></p><ul><li><p>Experience developing brand identities from concept through final guidelines</p></li><li><p>Familiarity with tools such as Figma, After Effects, or Keynote</p></li><li><p>Exposure to motion graphics, UX/UI, or environmental design</p></li><li><p>Experience working alongside photographers, illustrators, or production teams</p></li></ul><p><strong>Portfolio Requirement</strong> A portfolio showcasing relevant work is required for consideration.</p><p>If you are excited about creating impactful, thoughtful design and want to help shape a growing brand, we encourage you to apply.</p><p></p><p><strong>Salary Range:</strong> $45,000 to $55,000</p>
',
                                'apply_url' => 'https://www.indeed.com/viewjob?jk=085c613ef6966851&from=shareddesktop_copy',
                                'created_at' => '2026-05-21 22:15:26',
                                'updated_at' => '2026-05-21 22:15:26',
                                'company_logo' => 'https://cdn.dribbble.com/userupload/47716966/file/5f171314f96fb154794a3e5eac17de1e.jpg?resize=24x24',
                                'website' => 'https://www.indeed.com/viewjob?jk=085c613ef6966851&from=shareddesktop_copy',
                            ),
                            29 => 
                            array (
                                'id' => 30,
                                'poster_id' => 13,
                                'title' => 'Graphic Artist',
                                'company_name' => 'BespokeBeautyBrands',
                                'location' => 'Los Angeles, CA',
                                'job_type' => 'Full-time',
                                'description' => 'About Us
We are a Los Angeles-based cosmetics company looking for a talented Graphic Artist to join our creative team. If you love beauty, branding, and great design — we want to hear from you.
The Role
As a Graphic Artist, you will create visual content for our brand across packaging, digital marketing, social media, and print. You will work closely with our marketing and product development teams to bring creative concepts to life.
What You\'ll Do
Design packaging, labels, and product visuals for cosmetic products
Create graphics for social media, email campaigns, and digital ads
Develop marketing materials, including banners, flyers, and promotional assets
Maintain brand consistency across all visual touchpoints
Collaborate with the marketing and product teams on creative direction
What We\'re Looking For
Minimum 3 years of professional graphic design experience
Proficiency in Adobe Creative Suite (Photoshop, Illustrator, InDesign)
Strong eye for typography, color, and layout
Experience in beauty, cosmetics, or consumer products is a plus
Ability to manage multiple projects and meet deadlines
Schedule & Location
This is a full-time position based in Los Angeles, CA. The schedule is hybrid — 3 days onsite and 2 days work from home.
How to Apply
Please submit your resume and portfolio. Applications without a portfolio will not be considered.
We are an equal opportunity employer.',
                                'description_html' => '
<h2><strong>About Us</strong></h2><p>We are a Los Angeles-based cosmetics company looking for a talented Graphic Artist to join our creative team. If you love beauty, branding, and great design — we want to hear from you.</p><h2><strong>The Role</strong></h2><p>As a Graphic Artist, you will create visual content for our brand across packaging, digital marketing, social media, and print. You will work closely with our marketing and product development teams to bring creative concepts to life.</p><h2><strong>What You\'ll Do</strong></h2><ul><li><p>Design packaging, labels, and product visuals for cosmetic products</p></li><li><p>Create graphics for social media, email campaigns, and digital ads</p></li><li><p>Develop marketing materials, including banners, flyers, and promotional assets</p></li><li><p>Maintain brand consistency across all visual touchpoints</p></li><li><p>Collaborate with the marketing and product teams on creative direction</p></li></ul><h2><strong>What We\'re Looking For</strong></h2><ul><li><p>Minimum 3 years of professional graphic design experience</p></li><li><p>Proficiency in Adobe Creative Suite (Photoshop, Illustrator, InDesign)</p></li><li><p>Strong eye for typography, color, and layout</p></li><li><p>Experience in beauty, cosmetics, or consumer products is a plus</p></li><li><p>Ability to manage multiple projects and meet deadlines</p></li></ul><h2><strong>Schedule &amp; Location</strong></h2><p>This is a full-time position based in Los Angeles, CA. The schedule is hybrid — 3 days onsite and 2 days work from home.</p><h2><strong>How to Apply</strong></h2><p>Please submit your resume and portfolio. Applications without a portfolio will not be considered.</p><p><em>We are an equal opportunity employer.</em></p>
',
                                'apply_url' => 'https://forms.cloud.microsoft/pages/responsepage.aspx?id=G6kshQAqzEGk0p4UK4RvTrTFW7OqQatKtp9ZUiQ4hylUNTI5QVdNQURHN1FHWFczS1RSU1dGRzBHUy4u&route=shorturl',
                                'created_at' => '2026-05-21 22:15:29',
                                'updated_at' => '2026-05-21 22:15:29',
                                'company_logo' => 'https://cdn.dribbble.com/userupload/47382344/file/49b6c8e244378161f5d372c4cc4f07e4.png?resize=24x24',
                                'website' => 'https://forms.cloud.microsoft/pages/responsepage.aspx?id=G6kshQAqzEGk0p4UK4RvTrTFW7OqQatKtp9ZUiQ4hylUNTI5QVdNQURHN1FHWFczS1RSU1dGRzBHUy4u&route=shorturl',
                            ),
                            30 => 
                            array (
                                'id' => 31,
                                'poster_id' => 14,
                                'title' => 'Art Director/Graphic Designer',
                                'company_name' => 'Talent101, Inc',
                                'location' => 'Dallas, TX',
                                'job_type' => 'Full-time',
                                'description' => 'Art Director/Graphic Designer
Role summary
This role delivers conceptually strong, visually cohesive, and strategically aligned design solutions across web, interactive, and print channels for our electronics industry client.
1) Multichannel marketing communications
·         Develop and implement visual communication material from concept through production
Design and support the execution of marketing materials, including:
Web and multimedia content design
Email campaigns
Social media assets
Promotional giveaways
Internal and external PowerPoint presentations
Brand-aligned photography and video assets
Brochures, catalogs, flyers and promotional literature
Print and digital advertisements
Retail point-of-purchase displays
Event materials such as exhibit graphics and signage
2) Web/UI design and user experience
Design visually compelling, responsive, user-friendly layouts for websites and digital interfaces
Translate wireframes and user flows into polished web/UI designs for desktop and mobile
Apply visual hierarchy, typography, and color theory to improve clarity and engagement
Ensure accessibility, usability, and alignment with  brand standards and current best practices
Create and maintain design systems, component libraries, and templates for consistency across experiences
Partner with developers to ensure accurate implementation and design fidelity
Iterate based on user feedback, analytics, and usability testing
3) Brand identity and visual strategy (across channels)
·         Develop and implement visual communication material from concept through production
Develop and apply consistent visual standards across creative assets to maintain a unified brand identity
Translating strategic marketing goals into cohesive design approaches that reflect the  brand voice and values
Provide art direction across layout, typography, color usage, imagery, and interaction patterns
Apply user-centered design processes and best practices to concepts, layouts, storyboards, wireframes, and site navigation
Conference with internal clients to determine objectives, constraints, and the best approach to the work',
                                'description_html' => '
<p><strong>Art Director/Graphic Designer</strong></p><p><strong>Role summary</strong> This role delivers conceptually strong, visually cohesive, and strategically aligned design solutions across web, interactive, and print channels for our electronics industry client.</p><p><strong>1) Multichannel marketing communications</strong></p><p>·         Develop and implement visual communication material from concept through production</p><ul><li><p>Design and support the execution of marketing materials, including:</p><ul><li><p>Web and multimedia content design</p></li><li><p>Email campaigns</p></li><li><p>Social media assets</p></li><li><p>Promotional giveaways</p></li><li><p>Internal and external PowerPoint presentations</p></li><li><p>Brand-aligned photography and video assets</p></li><li><p>Brochures, catalogs, flyers and promotional literature</p></li><li><p>Print and digital advertisements</p></li><li><p>Retail point-of-purchase displays</p></li><li><p>Event materials such as exhibit graphics and signage</p></li></ul></li></ul><p><strong>2) Web/UI design and user experience</strong></p><ul><li><p>Design visually compelling, responsive, user-friendly layouts for websites and digital interfaces</p></li><li><p>Translate wireframes and user flows into polished web/UI designs for desktop and mobile</p></li><li><p>Apply visual hierarchy, typography, and color theory to improve clarity and engagement</p></li><li><p>Ensure accessibility, usability, and alignment with  brand standards and current best practices</p></li><li><p>Create and maintain design systems, component libraries, and templates for consistency across experiences</p></li><li><p>Partner with developers to ensure accurate implementation and design fidelity</p></li><li><p>Iterate based on user feedback, analytics, and usability testing</p></li></ul><p><strong>3) Brand identity and visual strategy (across channels)</strong></p><p>·         Develop and implement visual communication material from concept through production</p><ul><li><p>Develop and apply consistent visual standards across creative assets to maintain a unified brand identity</p></li><li><p>Translating strategic marketing goals into cohesive design approaches that reflect the  brand voice and values</p></li><li><p>Provide art direction across layout, typography, color usage, imagery, and interaction patterns</p></li><li><p>Apply user-centered design processes and best practices to concepts, layouts, storyboards, wireframes, and site navigation</p></li><li><p>Conference with internal clients to determine objectives, constraints, and the best approach to the work</p></li></ul>
',
                                'apply_url' => 'https://ats.rippling.com/talent-101-inc/jobs/6cc5b100-0140-4698-8921-ca157a1382fa',
                                'created_at' => '2026-05-21 22:15:32',
                                'updated_at' => '2026-05-21 22:15:32',
                                'company_logo' => 'https://cdn.dribbble.com/userupload/47714291/file/1b7a60d7f28177a791065bf3fa0ac6a4.jpg?resize=24x24',
                                'website' => 'https://ats.rippling.com/talent-101-inc/jobs/6cc5b100-0140-4698-8921-ca157a1382fa',
                            ),
                            31 => 
                            array (
                                'id' => 32,
                                'poster_id' => 38,
                                'title' => 'Presentation Designer/Visual Storyteller',
                                'company_name' => 'YinzCam, Inc.',
                                'location' => 'Pittsburgh, PA',
                                'job_type' => 'Full-time',
                                'description' => 'About the Role.
YinzCam powers the digital fan experience for 200+ professional sports teams across 7 countries. We move fast, we pitch big, and we need our decks to look like it. We\'re looking for a sharp, high-energy designer who lives inside PowerPoint or Keynote the way engineers live inside code — someone who can turn a rough brief into a polished, persuasive visual story, fast.
You\'ll work directly with the CEO on daily pitch decks, sales collateral, product presentations, Summit keynotes, and partner proposals. Every output needs to feel like it belongs on a stadium jumbotron — not a boardroom projector.
This is a fully onsite role in Pittsburgh, PA.
You\'ll be in the building, in the room, and on the call. Remote or hybrid arrangements are not available for this position.
What You\'ll Do.
Build and refine pitch decks, sales one-pagers, QBRs, product demos, and executive presentations from briefs, bullet points, or rough drafts
Develop and maintain a visual system (templates, color palettes, component libraries) tailored to YinzCam\'s brand and each client\'s team identity
Source, edit, and integrate sports photography, team graphics, and motion assets to make slides feel alive
Translate complex product features and data into clean visual narratives — funnels, KPI grids, journey maps, comparison matrices
Rapidly iterate during live working sessions — you\'re comfortable making changes in real time on a call
Own an asset library of reusable slide components organized for fast turnaround
Occasionally produce short motion graphics or animated slide elements for Summit and keynote contexts
What You Bring.
A portfolio of sports-centric client pitch decks is required to be considered.
We want to see decks you\'ve built for sports teams, leagues, sports-adjacent brands, or agencies pitching into the sports industry — not sports as a personal interest, but as professional output
Expert-level PowerPoint
and
Keynote (not "proficient" — genuinely fast and fluent)
Strong design instincts: typography, layout, color hierarchy, white space. You know why something looks bad and how to fix it immediately
Sports visual fluency — you understand the aesthetic and brands of leagues, clubs, and team brands, and you know how to work within or alongside them
Experience designing for sales or executive audiences, not just portfolios
Ability to work from a brief as short as a Slack message and deliver something compelling within hours
Adobe Creative Suite for asset prep (Photoshop, Illustrator at minimum)
Bonus: motion graphics experience (After Effects, Figma, or similar)
Bonus: familiarity with data visualization tools or building charts that don\'t look like Excel defaults
How You Work.
You\'re responsive and fast — this is a high-velocity role with shifting priorities
You are deadline-oriented and can manage your time with shifting priorities
You are a reliable communicator, and can provide daily updates and communication
You can handle confidential client materials (NFL, NBA, EPL teams) with discretion
What Success Looks Like in 90 Days.
You\'ve built a reusable YinzCam product deck with modular components
You\'ve shipped at least 10 client-facing decks with minimal revision cycles
The CEO is spending less time on slides and more time on strategy',
                                'description_html' => '
<p><strong>About the Role.</strong></p><p>YinzCam powers the digital fan experience for 200+ professional sports teams across 7 countries. We move fast, we pitch big, and we need our decks to look like it. We\'re looking for a sharp, high-energy designer who lives inside PowerPoint or Keynote the way engineers live inside code — someone who can turn a rough brief into a polished, persuasive visual story, fast.</p><p>You\'ll work directly with the CEO on daily pitch decks, sales collateral, product presentations, Summit keynotes, and partner proposals. Every output needs to feel like it belongs on a stadium jumbotron — not a boardroom projector.</p><p><strong>This is a fully onsite role in Pittsburgh, PA.</strong> You\'ll be in the building, in the room, and on the call. Remote or hybrid arrangements are not available for this position.</p><p><strong>What You\'ll Do.</strong></p><ul><li><p>Build and refine pitch decks, sales one-pagers, QBRs, product demos, and executive presentations from briefs, bullet points, or rough drafts</p></li><li><p>Develop and maintain a visual system (templates, color palettes, component libraries) tailored to YinzCam\'s brand and each client\'s team identity</p></li><li><p>Source, edit, and integrate sports photography, team graphics, and motion assets to make slides feel alive</p></li><li><p>Translate complex product features and data into clean visual narratives — funnels, KPI grids, journey maps, comparison matrices</p></li><li><p>Rapidly iterate during live working sessions — you\'re comfortable making changes in real time on a call</p></li><li><p>Own an asset library of reusable slide components organized for fast turnaround</p></li><li><p>Occasionally produce short motion graphics or animated slide elements for Summit and keynote contexts</p></li></ul><p><strong>What You Bring.</strong></p><ul><li><p><strong>A portfolio of sports-centric client pitch decks is required to be considered.</strong> We want to see decks you\'ve built for sports teams, leagues, sports-adjacent brands, or agencies pitching into the sports industry — not sports as a personal interest, but as professional output</p></li><li><p>Expert-level PowerPoint <em>and</em> Keynote (not "proficient" — genuinely fast and fluent)</p></li><li><p>Strong design instincts: typography, layout, color hierarchy, white space. You know why something looks bad and how to fix it immediately</p></li><li><p>Sports visual fluency — you understand the aesthetic and brands of leagues, clubs, and team brands, and you know how to work within or alongside them</p></li><li><p>Experience designing for sales or executive audiences, not just portfolios</p></li><li><p>Ability to work from a brief as short as a Slack message and deliver something compelling within hours</p></li><li><p>Adobe Creative Suite for asset prep (Photoshop, Illustrator at minimum)</p></li><li><p>Bonus: motion graphics experience (After Effects, Figma, or similar)</p></li><li><p>Bonus: familiarity with data visualization tools or building charts that don\'t look like Excel defaults</p></li></ul><p><strong>How You Work.</strong></p><ul><li><p>You\'re responsive and fast — this is a high-velocity role with shifting priorities</p></li><li><p>You are deadline-oriented and can manage your time with shifting priorities</p></li><li><p>You are a reliable communicator, and can provide daily updates and communication</p></li><li><p>You can handle confidential client materials (NFL, NBA, EPL teams) with discretion</p></li></ul><p><strong>What Success Looks Like in 90 Days.</strong></p><ul><li><p>You\'ve built a reusable YinzCam product deck with modular components</p></li><li><p>You\'ve shipped at least 10 client-facing decks with minimal revision cycles</p></li><li><p>The CEO is spending less time on slides and more time on strategy</p></li></ul>
',
                                'apply_url' => 'https://www.comeet.com/jobs/yinzcam/2A.008/presentation-designer--visual-storyteller/D5.767',
                                'created_at' => '2026-05-21 22:15:35',
                                'updated_at' => '2026-05-21 22:15:35',
                                'company_logo' => 'https://cdn.dribbble.com/userupload/47053785/file/fe2cc2224aae2e25e60e68ed219c10a6.png?resize=24x24',
                                'website' => 'https://www.comeet.com/jobs/yinzcam/2A.008/presentation-designer--visual-storyteller/D5.767',
                            ),
                            32 => 
                            array (
                                'id' => 33,
                                'poster_id' => 26,
                            'title' => 'Web Designer (Figma)',
                                'company_name' => 'The Sher Agency',
                                'location' => 'Brazil',
                                'job_type' => 'Full-time',
                                'description' => 'About the job
Job Function & KPIs
On a given project, the Designer is responsible for:
Leads visual aesthetic
Leads user experience design
Project management (timelines, internal communication, etc.)
Ensures overall project quality (QA of development and copywriting)
Performance Will Be Measured By:
Quality of final website (bug free, beautiful designs, designed to convert visitors into customers)
Client satisfaction
Project completion date (most projects should be completed under 1 month)
Communication + response times (expected to provide prompt response during business hours)
Required Skills & Experience
Required:
2+ years experience in an agency or freelance setting creating websites for clients
4+ years in web design work
Deep understanding of User Experience / User Behaviour
Deep understanding of marketing / conversion rate best practices for a website
Experience designing many beautiful websites in Figma for a variety of industries
Must have experience designing websites for/with real businesses/clients
Helpful, but not required:
Experience working with developers and copywriters
Copywriting skills
Experience in CMS tools such as Wordpress, Webflow, Shopify
Compensation Structure
Full time, paid via monthly salary. $1500-$2500 USD/Mo
Other Details
Must be a fluent English speaker.
Must be based in North, Central, or South America for optimal time zone alignment.
Self-motivated and detail-oriented, with a proactive approach to identifying and resolving issues.',
                                'description_html' => '
<h2><strong>About the job</strong></h2><p></p><p><strong>Job Function &amp; KPIs</strong></p><p>On a given project, the Designer is responsible for:</p><ul><li><p>Leads visual aesthetic</p></li><li><p>Leads user experience design</p></li><li><p>Project management (timelines, internal communication, etc.)</p></li><li><p>Ensures overall project quality (QA of development and copywriting)</p></li></ul><p>Performance Will Be Measured By:</p><ul><li><p>Quality of final website (bug free, beautiful designs, designed to convert visitors into customers)</p></li><li><p>Client satisfaction</p></li><li><p>Project completion date (most projects should be completed under 1 month)</p></li><li><p>Communication + response times (expected to provide prompt response during business hours)</p></li></ul><p></p><p><strong>Required Skills &amp; Experience</strong></p><p>Required:</p><ul><li><p>2+ years experience in an agency or freelance setting creating websites for clients</p></li><li><p>4+ years in web design work</p></li><li><p>Deep understanding of User Experience / User Behaviour</p></li><li><p>Deep understanding of marketing / conversion rate best practices for a website</p></li><li><p>Experience designing many beautiful websites in Figma for a variety of industries</p></li><li><p>Must have experience designing websites for/with real businesses/clients</p></li></ul><p></p><p>Helpful, but not required:</p><ul><li><p>Experience working with developers and copywriters</p></li><li><p>Copywriting skills</p></li><li><p>Experience in CMS tools such as Wordpress, Webflow, Shopify</p></li></ul><p></p><p><strong>Compensation Structure</strong></p><p>Full time, paid via monthly salary. $1500-$2500 USD/Mo</p><p></p><p><strong>Other Details</strong></p><ul><li><p>Must be a fluent English speaker.</p></li><li><p>Must be based in North, Central, or South America for optimal time zone alignment.</p></li><li><p>Self-motivated and detail-oriented, with a proactive approach to identifying and resolving issues.</p></li></ul><p></p>
',
                                'apply_url' => 'https://sheragency.com/careers/web-designer',
                                'created_at' => '2026-05-21 22:15:38',
                                'updated_at' => '2026-05-21 22:15:38',
                                'company_logo' => 'https://cdn.dribbble.com/userupload/47702982/file/b089b114d460eb174d04b703ef2adf80.png?resize=24x24',
                                'website' => 'https://sheragency.com/careers/web-designer',
                            ),
                            33 => 
                            array (
                                'id' => 34,
                                'poster_id' => 100,
                                'title' => 'Digital Designer & Video Editor',
                                'company_name' => 'Get Dopa Limited',
                                'location' => 'Remote',
                                'job_type' => 'Freelance',
                                'description' => 'We\'re a growing brain nutrition brand looking for a freelance designer to help us create and improve assets across social media and email.
What you\'ll work on
Producing organic and paid social assets for Meta and other social channels.
Editing short-form reels from our content bank and stock footage, for use in both ads and organic. You\'ll need to understand how to cut to stop the scroll and drive the sale. A performance edit.
Designing email templates for flows and campaigns - built to convert and retain customers
You\'re probably a good fit if you
Have experience designing for e-commerce or DTC brands
Can balance brand, UX, and performance in the same asset
Can create static and moving ads that will drive sales
Are proficient in Figma and your preferred video editing suite
Comfortable using AI tools to source and adapt imagery and accelerate production
Note: our existing assets are in Adobe XD — comfort migrating these to Figma is a plus
Details
Freelance / contractor
10–20 hours per month (with scope to grow)
Fully remote
Competitive day rate — please include your rate in your application
To apply
, send your portfolio and a few examples of relevant work (e-comm, ads, or email) to
partners@getdopa.com',
                                'description_html' => '
<p>We\'re a growing brain nutrition brand looking for a freelance designer to help us create and improve assets across social media and email. </p><p><strong>What you\'ll work on</strong> </p><ul><li><p>Producing organic and paid social assets for Meta and other social channels. </p></li></ul><ul><li><p>Editing short-form reels from our content bank and stock footage, for use in both ads and organic. You\'ll need to understand how to cut to stop the scroll and drive the sale. A performance edit. </p></li></ul><ul><li><p>Designing email templates for flows and campaigns - built to convert and retain customers </p></li></ul><p> </p><p><strong>You\'re probably a good fit if you</strong> </p><ul><li><p>Have experience designing for e-commerce or DTC brands </p></li></ul><ul><li><p>Can balance brand, UX, and performance in the same asset</p></li><li><p>Can create static and moving ads that will drive sales</p></li></ul><ul><li><p>Are proficient in Figma and your preferred video editing suite </p></li></ul><ul><li><p>Comfortable using AI tools to source and adapt imagery and accelerate production </p></li></ul><ul><li><p>Note: our existing assets are in Adobe XD — comfort migrating these to Figma is a plus </p></li></ul><p><strong>Details</strong> </p><ul><li><p>Freelance / contractor </p></li></ul><ul><li><p>10–20 hours per month (with scope to grow) </p></li></ul><ul><li><p>Fully remote </p></li></ul><ul><li><p>Competitive day rate — please include your rate in your application </p></li></ul><p><strong>To apply</strong>, send your portfolio and a few examples of relevant work (e-comm, ads, or email) to <a href="mailto:matt@getdopa.com">partners@getdopa.com</a> </p><p> </p>
',
                                'apply_url' => 'https://www.getdopa.com/pages/contactus',
                                'created_at' => '2026-05-21 22:15:41',
                                'updated_at' => '2026-05-21 22:15:41',
                                'company_logo' => 'https://cdn.dribbble.com/userupload/47687925/file/61a872b749a21bfafe3dd9928e3c7493.png?resize=24x24',
                                'website' => 'https://www.getdopa.com/pages/contactus',
                            ),
                            34 => 
                            array (
                                'id' => 35,
                                'poster_id' => 84,
                                'title' => 'Product Design Lead',
                                'company_name' => 'AirOps',
                                'location' => 'New York City, NY',
                                'job_type' => 'Full-time',
                                'description' => 'AirOps is growing quickly. We’re looking to further accelerate our growth by bringing on a world-class Senior Product Designer.
Our ideal candidate is an autonomous, self-motivated designer with a keen eye for quality and a passion for driving impactful outcomes. They will possess an impressive portfolio demonstrating proficiency in designing complex SaaS products within highly technical industries. This individual embraces AI-first design principles and is adept at crafting visually stunning interfaces that prioritize an intuitive and educational user experience.
Responsibilities:
Collaborate closely with the Head of Design to define AirOps’ new visual identity and user experience, ensuring alignment with business objectives and user needs.
Lead the ideation, prototyping, and refinement of AirOps’ core product, leveraging data insights to drive iterative design improvements.
Confidence exploring and creating designs in an industry with few comparable products, with an openness to iterations and an excitement for innovative designs that have never been built before.
Work cross-functionally with Product and Engineering to deliver well-crafted, high-performance experiences that delight our customers.
Champion a consistent design language and brand identity across all product touchpoints (core product, website, marketing collateral), maintaining a cohesive user experience.
Advocate for user-centric design practices, incorporating feedback and insights from user research and testing into product iterations.',
                                'description_html' => '
<p>AirOps is growing quickly. We’re looking to further accelerate our growth by bringing on a world-class Senior Product Designer.</p><p>Our ideal candidate is an autonomous, self-motivated designer with a keen eye for quality and a passion for driving impactful outcomes. They will possess an impressive portfolio demonstrating proficiency in designing complex SaaS products within highly technical industries. This individual embraces AI-first design principles and is adept at crafting visually stunning interfaces that prioritize an intuitive and educational user experience.</p><p><strong>Responsibilities:</strong></p><ul><li><p>Collaborate closely with the Head of Design to define AirOps’ new visual identity and user experience, ensuring alignment with business objectives and user needs.</p></li><li><p>Lead the ideation, prototyping, and refinement of AirOps’ core product, leveraging data insights to drive iterative design improvements.</p></li><li><p>Confidence exploring and creating designs in an industry with few comparable products, with an openness to iterations and an excitement for innovative designs that have never been built before.</p></li><li><p>Work cross-functionally with Product and Engineering to deliver well-crafted, high-performance experiences that delight our customers.</p></li><li><p>Champion a consistent design language and brand identity across all product touchpoints (core product, website, marketing collateral), maintaining a cohesive user experience.</p></li><li><p>Advocate for user-centric design practices, incorporating feedback and insights from user research and testing into product iterations.</p></li></ul>
',
                                'apply_url' => 'https://airops.typeform.com/to/nycQrfO3?typeform-source=dribbble.com',
                                'created_at' => '2026-05-21 22:15:44',
                                'updated_at' => '2026-05-21 22:15:44',
                                'company_logo' => 'https://cdn.dribbble.com/userupload/15198321/file/original-570fbc69172499a3158e32425b6beb8c.com?resize=24x24',
                                'website' => 'https://airops.typeform.com/to/nycQrfO3?typeform-source=dribbble.com',
                            ),
                            35 => 
                            array (
                                'id' => 36,
                                'poster_id' => 75,
                                'title' => 'Industrial/Product Designer',
                                'company_name' => 'eternal.ag',
                                'location' => 'Bangalore, India',
                                'job_type' => 'Full-time',
                                'description' => 'About
eternal.ag
eternal.ag
develops autonomous robots that execute crop-work (such as harvesting) — to address the severe labor shortages in commercial greenhouses. Our vision is to enable existing & new greenhouses to become fully automated, highly resource-efficient, sustainable food production sites that can be deployed anywhere on earth. This will enable local-for-local food production regardless of climate, while disconnecting the reliance on specialized knowledge for its operations and overcoming the shortage of labor for crop-work.
About the role
We are a small but focused design team. Our goal is to completely redefine the user experience of greenhouse robotics and automated greenhouses. This includes:
Making our products, both physical and digital, aesthetically pleasing
Polishing every touchpoint of our brand
Making sure every UI interaction is simple, tactile, effortless and fast
Communicating ideas in a clear, understandable, beautiful way
What we\'re looking for
We are looking for an exceptional industrial/product designer with a strong work ethic to join our team in Bangalore. Apply if you:
Have a strong sketching ability and spatial thinking
Have strong design fundamentals - line & surface flow, proportions, the way the light interacts with surfaces & materials
Have one or more of the following in your software stack: Plasticity, Rhino, Blender
Are ready to constantly grow and learn, no matter if it\'s new software or techniques
Are ready to take on a task even if they have little or no expertise in the area. You have to be ready to learn fast, fail and iterate
Are a self-starter who can figure stuff out when needed instead of finding reasons why you can\'t
Are a team player and do not take criticism personally
Good luck! Applications with no portfolio will be instantly rejected, so make sure to attach one.',
                                'description_html' => '
<p><strong>About </strong><a href="http://eternal.ag"><strong>eternal.ag</strong></a></p><p><a href="http://eternal.ag">eternal.ag</a> develops autonomous robots that execute crop-work (such as harvesting) — to address the severe labor shortages in commercial greenhouses. Our vision is to enable existing &amp; new greenhouses to become fully automated, highly resource-efficient, sustainable food production sites that can be deployed anywhere on earth. This will enable local-for-local food production regardless of climate, while disconnecting the reliance on specialized knowledge for its operations and overcoming the shortage of labor for crop-work.</p><p></p><p><strong>About the role</strong></p><p>We are a small but focused design team. Our goal is to completely redefine the user experience of greenhouse robotics and automated greenhouses. This includes:</p><ul><li><p> Making our products, both physical and digital, aesthetically pleasing</p></li><li><p>Polishing every touchpoint of our brand</p></li><li><p>Making sure every UI interaction is simple, tactile, effortless and fast</p></li><li><p>Communicating ideas in a clear, understandable, beautiful way</p></li></ul><p> </p><p><strong>What we\'re looking for</strong></p><p>We are looking for an exceptional industrial/product designer with a strong work ethic to join our team in Bangalore. Apply if you:</p><ul><li><p> Have a strong sketching ability and spatial thinking</p></li><li><p>Have strong design fundamentals - line &amp; surface flow, proportions, the way the light interacts with surfaces &amp; materials</p></li><li><p>Have one or more of the following in your software stack: Plasticity, Rhino, Blender</p></li><li><p> Are ready to constantly grow and learn, no matter if it\'s new software or techniques</p></li><li><p>Are ready to take on a task even if they have little or no expertise in the area. You have to be ready to learn fast, fail and iterate</p></li><li><p>Are a self-starter who can figure stuff out when needed instead of finding reasons why you can\'t</p></li><li><p>Are a team player and do not take criticism personally</p></li></ul><p> </p><p>Good luck! Applications with no portfolio will be instantly rejected, so make sure to attach one.</p>
',
                                'apply_url' => 'https://ats.rippling.com/eternal/jobs/38220314-e129-45c8-8ba1-b6398be27caf',
                                'created_at' => '2026-05-21 22:15:46',
                                'updated_at' => '2026-05-21 22:15:46',
                                'company_logo' => 'https://cdn.dribbble.com/userupload/47685781/file/6c6363295584664fdfb982ecb411b94d.png?resize=24x24',
                                'website' => 'https://ats.rippling.com/eternal/jobs/38220314-e129-45c8-8ba1-b6398be27caf',
                            ),
                            36 => 
                            array (
                                'id' => 37,
                                'poster_id' => 38,
                                'title' => 'Graphic Designer',
                                'company_name' => 'eternal.ag',
                                'location' => 'Bangalore, India',
                                'job_type' => 'Full-time',
                                'description' => 'About
eternal.ag
eternal.ag
develops autonomous robots that execute crop-work (such as harvesting) — to address the severe labor shortages in commercial greenhouses. Our vision is to enable existing & new greenhouses to become fully automated, highly resource-efficient, sustainable food production sites that can be deployed anywhere on earth. This will enable local-for-local food production regardless of climate, while disconnecting the reliance on specialized knowledge for its operations and overcoming the shortage of labor for crop-work.
About the role
We are a small but focused design team. Our goal is to completely redefine the user experience of greenhouse robotics and automated greenhouses. This includes:
Making our products, both physical and digital, aesthetically pleasing
Polishing every touchpoint of our brand
Making sure every UI interaction is simple, tactile, effortless and fast
Communicating ideas in a clear, understandable, beautiful way
What we\'re looking for
We are looking for an exceptional graphic designer with a strong work ethic to join our team. Apply if you:
Are ready to constantly grow and learn, no matter if it\'s new software or techniques
Have strong design fundamentals - layout, typography, colors, flow of lines & shapes, focal points and how those are applicable across different design disciplines
Are ready to take on a task even if you have little or no expertise in the area. You have to be ready to learn fast, fail and iterate
Have one or more of the following in your software stack: Figma, Illustrator, Cavalry, Rive, Affinity Suite
Are a self-starter who can figure stuff out when needed instead of finding reasons why you can\'t
Are a team player and do not take criticism personally
Bonus, but much less important:
Experience building software products
Experience with Svelte, WebGPU, three.js
Experience designing physical things
Experience with Blender
Good luck! Applications with no portfolio will be instantly rejected, so make sure to attach one.',
                                'description_html' => '
<p><strong>About </strong><a href="http://eternal.ag"><strong>eternal.ag</strong></a></p><p><a href="http://eternal.ag">eternal.ag</a> develops autonomous robots that execute crop-work (such as harvesting) — to address the severe labor shortages in commercial greenhouses. Our vision is to enable existing &amp; new greenhouses to become fully automated, highly resource-efficient, sustainable food production sites that can be deployed anywhere on earth. This will enable local-for-local food production regardless of climate, while disconnecting the reliance on specialized knowledge for its operations and overcoming the shortage of labor for crop-work.</p><p></p><p><strong>About the role</strong></p><p>We are a small but focused design team. Our goal is to completely redefine the user experience of greenhouse robotics and automated greenhouses. This includes:</p><ul><li><p> Making our products, both physical and digital, aesthetically pleasing</p></li><li><p>Polishing every touchpoint of our brand</p></li><li><p>Making sure every UI interaction is simple, tactile, effortless and fast</p></li><li><p>Communicating ideas in a clear, understandable, beautiful way</p></li></ul><p> </p><p><strong>What we\'re looking for</strong></p><p>We are looking for an exceptional graphic designer with a strong work ethic to join our team. Apply if you:</p><ul><li><p> Are ready to constantly grow and learn, no matter if it\'s new software or techniques</p></li><li><p>Have strong design fundamentals - layout, typography, colors, flow of lines &amp; shapes, focal points and how those are applicable across different design disciplines</p></li><li><p>Are ready to take on a task even if you have little or no expertise in the area. You have to be ready to learn fast, fail and iterate</p></li><li><p>Have one or more of the following in your software stack: Figma, Illustrator, Cavalry, Rive, Affinity Suite</p></li><li><p>Are a self-starter who can figure stuff out when needed instead of finding reasons why you can\'t</p></li><li><p>Are a team player and do not take criticism personally</p></li></ul><p> </p><p><strong>Bonus, but much less important:</strong></p><ul><li><p> Experience building software products</p></li><li><p>Experience with Svelte, WebGPU, three.js</p></li><li><p>Experience designing physical things</p></li><li><p>Experience with Blender</p></li></ul><p> Good luck! Applications with no portfolio will be instantly rejected, so make sure to attach one.</p>
',
                                'apply_url' => 'https://ats.rippling.com/eternal/jobs/75630da6-1989-414a-b3e4-d75bbbe5c110',
                                'created_at' => '2026-05-21 22:15:49',
                                'updated_at' => '2026-05-21 22:15:49',
                                'company_logo' => 'https://cdn.dribbble.com/userupload/47685063/file/6389ceb8e9cecc9ac3238fca42b86022.png?resize=24x24',
                                'website' => 'https://ats.rippling.com/eternal/jobs/75630da6-1989-414a-b3e4-d75bbbe5c110',
                            ),
                            37 => 
                            array (
                                'id' => 38,
                                'poster_id' => 35,
                                'title' => 'B2B Creative Director',
                                'company_name' => 'Foundation Marketing',
                                'location' => 'Remote',
                                'job_type' => 'Full-time',
                                'description' => 'We’re looking for a B2B Creative Director to shape the future of storytelling at Foundation. You’ll lead the creative vision for our agency and clients, developing ideas that stop the scroll, move audiences, and redefine what’s possible in B2B marketing.
You’ll have the freedom to imagine, experiment, and execute bold creative that blends data, strategy, and emotion. This role is built for someone who thrives on ownership, innovation, and big ideas rather than incremental change.
You’ll collaborate with strategists and marketers, but your focus will be on setting direction, inspiring teams, and driving creative that performs.
About Foundation
Foundation is a B2B content marketing agency that helps some of the world’s most respected brands, including Canva, Bitly, and Procore, build content systems that drive measurable growth.
We specialize in content strategy, SEO, and AI-driven distribution frameworks rooted in data and creativity. Our team values bold thinking, clear results, and a bias toward action.
Key Responsibilities
Own the creative vision for Foundation and our clients across social storytelling and full-funnel brand campaigns.
Lead ideation and concept development across social, video, and written formats, ensuring every idea connects with both emotion and business impact.
Inspire and guide a distributed team of writers, editors, and designers to execute breakthrough creative.
Shape brand storytelling frameworks that scale across channels, clients, and formats.
Collaborate with strategy and performance teams to turn insights into standout creative concepts.
Experiment constantly with AI-powered tools and new media formats, pushing the boundaries of what great B2B storytelling looks like.
Champion brand voice and creative quality across every internal and client touchpoint.
Qualifications
7+ years of experience in creative direction, brand storytelling, or social media strategy, ideally within a B2B or agency environment.
A portfolio that shows bold thinking, emotional storytelling, and strong execution across digital platforms.
Deep understanding of what drives engagement on LinkedIn, YouTube, and emerging B2B platforms.
Proven ability to craft and evaluate high-quality copy, video, and social creative.
Natural leadership presence that inspires, challenges, and brings energy to every project.
Comfortable making fast decisions and pivoting based on new data and ideas.
Key Metrics
Measurable engagement growth across creative-led campaigns.
Improved creative approval rates and faster alignment across teams.
Increased client satisfaction scores and brand impact.
Documented creative playbooks or frameworks that inspire future work.
Visible innovation in how Foundation and its clients tell stories online.
HOW TO APPLY:
As part of your application, please complete the
Culture Index survey
. This must be submitted to be considered for the role.
Once completed, please follow
this link
to submit your application form for the position.',
                                'description_html' => '
<p>We’re looking for a B2B Creative Director to shape the future of storytelling at Foundation. You’ll lead the creative vision for our agency and clients, developing ideas that stop the scroll, move audiences, and redefine what’s possible in B2B marketing.</p><p>You’ll have the freedom to imagine, experiment, and execute bold creative that blends data, strategy, and emotion. This role is built for someone who thrives on ownership, innovation, and big ideas rather than incremental change.</p><p>You’ll collaborate with strategists and marketers, but your focus will be on setting direction, inspiring teams, and driving creative that performs.</p><p></p><p><strong>About Foundation</strong></p><p>Foundation is a B2B content marketing agency that helps some of the world’s most respected brands, including Canva, Bitly, and Procore, build content systems that drive measurable growth.</p><p>We specialize in content strategy, SEO, and AI-driven distribution frameworks rooted in data and creativity. Our team values bold thinking, clear results, and a bias toward action.</p><p></p><p><strong>Key Responsibilities</strong></p><ul><li><p>Own the creative vision for Foundation and our clients across social storytelling and full-funnel brand campaigns.</p></li><li><p>Lead ideation and concept development across social, video, and written formats, ensuring every idea connects with both emotion and business impact.</p></li><li><p>Inspire and guide a distributed team of writers, editors, and designers to execute breakthrough creative.</p></li><li><p>Shape brand storytelling frameworks that scale across channels, clients, and formats.</p></li><li><p>Collaborate with strategy and performance teams to turn insights into standout creative concepts.</p></li><li><p>Experiment constantly with AI-powered tools and new media formats, pushing the boundaries of what great B2B storytelling looks like.</p></li><li><p>Champion brand voice and creative quality across every internal and client touchpoint.</p><p></p></li></ul><p></p><p><strong>Qualifications</strong></p><ul><li><p>7+ years of experience in creative direction, brand storytelling, or social media strategy, ideally within a B2B or agency environment.</p></li><li><p>A portfolio that shows bold thinking, emotional storytelling, and strong execution across digital platforms.</p></li><li><p>Deep understanding of what drives engagement on LinkedIn, YouTube, and emerging B2B platforms.</p></li><li><p>Proven ability to craft and evaluate high-quality copy, video, and social creative.</p></li><li><p>Natural leadership presence that inspires, challenges, and brings energy to every project.</p></li><li><p>Comfortable making fast decisions and pivoting based on new data and ideas.</p><p></p></li></ul><p></p><p><strong>Key Metrics</strong></p><ul><li><p>Measurable engagement growth across creative-led campaigns.</p></li><li><p>Improved creative approval rates and faster alignment across teams.</p></li><li><p>Increased client satisfaction scores and brand impact.</p></li><li><p>Documented creative playbooks or frameworks that inspire future work.</p></li><li><p>Visible innovation in how Foundation and its clients tell stories online.</p><p></p></li></ul><p></p><p><strong>HOW TO APPLY:</strong></p><p>As part of your application, please complete the <a href="https://go.cultureindex.com/p/cdAxQw8gE7bku80"><strong>Culture Index survey</strong></a>. This must be submitted to be considered for the role.</p><p>Once completed, please follow <a href="https://foundationinc-co.clickup.com/forms/14135164/f/dfbvw-62294/PV7BMPLWUOYHUDJ548"><strong>this link</strong></a><strong> </strong>to submit your application form for the position.</p>
',
                                'apply_url' => 'https://foundationinc.co/careers/b2b-creative-director',
                                'created_at' => '2026-05-21 22:15:52',
                                'updated_at' => '2026-05-21 22:15:52',
                                'company_logo' => 'https://cdn.dribbble.com/userupload/45661864/file/f06e38a7a9b4f8e1c791e6f6ad279be7.png?resize=24x24',
                                'website' => 'https://foundationinc.co/careers/b2b-creative-director',
                            ),
                            38 => 
                            array (
                                'id' => 39,
                                'poster_id' => 38,
                                'title' => 'Brand Designer & Marketing Lead',
                                'company_name' => 'Otter Technologies',
                                'location' => 'Remote',
                                'job_type' => 'Full-time',
                                'description' => 'Job Overview
Otter Technologies is seeking a
Brand Designer & Marketing Lead (Illustration-First)
to join our team full-time.
This is
not
a traditional marketing manager role.
We are looking for a
highly skilled illustrator and graphic designer at the core
—someone who understands that great marketing starts with great design. With modern AI tools handling much of the repetitive marketing execution, this role focuses on
visual identity, brand systems, creative direction, and design leadership
across our growing ecosystem of software brands.
We recently hired a
full-time videographer
(starting March 1st) who will be producing
one new video every week (52 per year)
. This role will work closely with that videographer by defining brand visuals, creative direction, and design standards—but
you will not be responsible for filming
.
What You’ll Be Responsible For
Brand & Design (Primary Focus)
Build and maintain the
brand book
across all Otter Technologies products (OtterSign, OtterText, OtterOrder, OtterScrub, and future products)
Define and design:
Color palettes
Typography systems
Icons, illustrations, and visual language
Ensure all brands feel cohesive while remaining distinct
Design:
Trade show booths and signage
Stickers, swag, and promotional materials
Campaign visuals for ads, web, and social
Create visual mockups, storyboards, and creative concepts for campaigns
Marketing Execution & Direction
Own
social media design and visual direction
across all brands
Design creative assets for:
Google Ads
Meta Ads
Social media campaigns
Email campaigns and templates
Define and maintain
brand voice and tone
Collaborate with advertising specialists (you are not the media buyer)
Work cross-functionally to support product launches and new brand initiatives
AI-Forward Workflow
We fully embrace AI as a tool. A strong illustrator + designer + AI can outperform traditional marketing teams.
This role is ideal for someone who understands how to
use AI to scale their creative output
, not replace their creative thinking.
Who This Role Is For
You are a
real illustrator
(you sketch, not just click)
You have strong design instincts and care deeply about aesthetics
You want ownership of how brands look, feel, and evolve
You want creative freedom with real responsibility
You understand how design drives marketing performance
Bonus points if you enjoy sketching otters 🦦
Required Experience & Skills
Strong illustration and graphic design background
Portfolio demonstrating illustration-first branding and design work
Proficiency with Adobe Creative Suite (Illustrator, Photoshop, InDesign)
Experience designing for both digital and print
Strong understanding of brand systems, color theory, and layout
Ability to manage multiple brands and projects simultaneously
How to Apply (IMPORTANT)
DO NOT APPLY WITH A RESUME.
We will not review resumes.
To be considered, you
must submit
:
A link to your graphic design / illustration portfolio
(Behance or similar)
Photos of your sketchbook
Every real illustrator has a sketchbook. We want to see how you think and draw by hand.
Applications without both will not be considered.
Compensation
Starting salary:
$69,000/year
Bonus opportunities tied to company growth and marketing performance
Long-term growth potential as Otter Technologies expands',
                                'description_html' => '
<p>Job Overview</p><p>Otter Technologies is seeking a <strong>Brand Designer &amp; Marketing Lead (Illustration-First)</strong> to join our team full-time.</p><p>This is <strong>not</strong> a traditional marketing manager role.</p><p>We are looking for a <strong>highly skilled illustrator and graphic designer at the core</strong>—someone who understands that great marketing starts with great design. With modern AI tools handling much of the repetitive marketing execution, this role focuses on <strong>visual identity, brand systems, creative direction, and design leadership</strong> across our growing ecosystem of software brands.</p><p>We recently hired a <strong>full-time videographer</strong> (starting March 1st) who will be producing <strong>one new video every week (52 per year)</strong>. This role will work closely with that videographer by defining brand visuals, creative direction, and design standards—but <strong>you will not be responsible for filming</strong>.</p><p>What You’ll Be Responsible For</p><p>Brand &amp; Design (Primary Focus)</p><ul><li><p>Build and maintain the <strong>brand book</strong> across all Otter Technologies products (OtterSign, OtterText, OtterOrder, OtterScrub, and future products)</p></li><li><p>Define and design:</p><ul><li><p>Color palettes</p></li><li><p>Typography systems</p></li><li><p>Icons, illustrations, and visual language</p></li></ul></li><li><p>Ensure all brands feel cohesive while remaining distinct</p></li><li><p>Design:</p><ul><li><p>Trade show booths and signage</p></li><li><p>Stickers, swag, and promotional materials</p></li><li><p>Campaign visuals for ads, web, and social</p></li></ul></li><li><p>Create visual mockups, storyboards, and creative concepts for campaigns</p></li></ul><p>Marketing Execution &amp; Direction</p><ul><li><p>Own <strong>social media design and visual direction</strong> across all brands</p></li><li><p>Design creative assets for:</p><ul><li><p>Google Ads</p></li><li><p>Meta Ads</p></li><li><p>Social media campaigns</p></li><li><p>Email campaigns and templates</p></li></ul></li><li><p>Define and maintain <strong>brand voice and tone</strong></p></li><li><p>Collaborate with advertising specialists (you are not the media buyer)</p></li><li><p>Work cross-functionally to support product launches and new brand initiatives</p></li></ul><p>AI-Forward Workflow</p><p>We fully embrace AI as a tool. A strong illustrator + designer + AI can outperform traditional marketing teams.</p><p>This role is ideal for someone who understands how to <strong>use AI to scale their creative output</strong>, not replace their creative thinking.</p><p>Who This Role Is For</p><ul><li><p>You are a <strong>real illustrator</strong> (you sketch, not just click)</p></li><li><p>You have strong design instincts and care deeply about aesthetics</p></li><li><p>You want ownership of how brands look, feel, and evolve</p></li><li><p>You want creative freedom with real responsibility</p></li><li><p>You understand how design drives marketing performance</p></li></ul><p><strong>Bonus points if you enjoy sketching otters 🦦</strong></p><p>Required Experience &amp; Skills</p><ul><li><p>Strong illustration and graphic design background</p></li><li><p>Portfolio demonstrating illustration-first branding and design work</p></li><li><p>Proficiency with Adobe Creative Suite (Illustrator, Photoshop, InDesign)</p></li><li><p>Experience designing for both digital and print</p></li><li><p>Strong understanding of brand systems, color theory, and layout</p></li><li><p>Ability to manage multiple brands and projects simultaneously</p></li></ul><p>How to Apply (IMPORTANT)</p><p><strong>DO NOT APPLY WITH A RESUME.</strong> We will not review resumes.</p><p>To be considered, you <strong>must submit</strong>:</p><ol><li><p><strong>A link to your graphic design / illustration portfolio</strong> (Behance or similar)</p></li><li><p><strong>Photos of your sketchbook</strong></p></li></ol><p>Every real illustrator has a sketchbook. We want to see how you think and draw by hand.</p><p>Applications without both will not be considered.</p><p>Compensation</p><ul><li><p>Starting salary: <strong>$69,000/year</strong></p></li><li><p>Bonus opportunities tied to company growth and marketing performance</p></li><li><p>Long-term growth potential as Otter Technologies expands</p></li></ul>
',
                                'apply_url' => 'https://www.indeed.com/job/brand-designer-marketing-lead-illustration-first-full-time-368a5034d642b6ca',
                                'created_at' => '2026-05-21 22:15:55',
                                'updated_at' => '2026-05-21 22:15:55',
                                'company_logo' => 'https://cdn.dribbble.com/userupload/46668835/file/e5aa4cdbb20d6dbd0d01f9845e4d56d4.png?resize=24x24',
                                'website' => 'https://www.indeed.com/job/brand-designer-marketing-lead-illustration-first-full-time-368a5034d642b6ca',
                            ),
                            39 => 
                            array (
                                'id' => 40,
                                'poster_id' => 46,
                                'title' => 'Graphic Designer / AI Specialist',
                                'company_name' => 'Growmodo',
                                'location' => 'Remote',
                                'job_type' => 'Freelance',
                                'description' => 'About Us
At Growmodo, we help fast-growing companies by connecting them with global talent while supporting the careers of creative and tech professionals. We\'re driven by growth, strong relationships, and a passion for delivering a “wow” experience daily. We’re looking for a
Graphic Designer with AI proficiency
to join our creative team.
The Role
Our standard work week runs
Monday to Friday
.
Full-Time
8:00 AM – 5:00 PM (Central European Time)
On-Call
No fixed daily hours; work is performed within the standard operating window of 8:00 AM–5:00 PM CET.
Work availability may vary based on operational and project needs
As a
Mid-Level
Graphic Designer / AI Specialist
at Growmodo, you’ll work on a wide range of visual projects from concept to final delivery. You’ll use your design skills and AI tools to develop high-quality graphics that support branding, marketing, and communication goals for a variety of clients. You will be expected to contribute fresh creative ideas, collaborate with internal stakeholders, and continuously improve the visual quality of your work.
Key Responsibilities
Design Execution:
Create logos, illustrations, layouts, and marketing materials using Adobe Illustrator, Photoshop, InDesign, and AI-enhanced design tools.
AI Integration:
Apply AI tools to enhance workflows and boost design productivity and creativity.
Collaboration:
Work with project managers, and other team members to align designs with project goals and client feedback.
Quality Control:
Ensure all designs meet visual standards, are brand-aligned, and are delivered on time with a high level of polish.
What We\'re Looking For
Must-Haves:
Strong skills in Adobe Creative Suite (Illustrator, Photoshop, InDesign).
Experience with AI-based design tools (e.g., Midjourney, Adobe Firefly, or similar).
A portfolio that demonstrates creative thinking, technical skill, and AI-enhanced work.
High attention to detail and commitment to delivering high-quality visuals.
Up-to-date knowledge of current design and AI trends.
Experience working in a fast-paced, collaborative design environment.
Ability to propose creative ideas and iterate based on constructive feedback.
Nice-To-Haves:
Familiarity with motion graphics or web design is a plus.',
                                'description_html' => '
<h2><strong>About Us</strong></h2><p>At Growmodo, we help fast-growing companies by connecting them with global talent while supporting the careers of creative and tech professionals. We\'re driven by growth, strong relationships, and a passion for delivering a “wow” experience daily. We’re looking for a <strong>Graphic Designer with AI proficiency</strong> to join our creative team.</p><p></p><p><strong>The Role</strong></p><p>Our standard work week runs <strong>Monday to Friday</strong>.</p><p><strong>Full-Time</strong></p><ul><li><p>8:00 AM – 5:00 PM (Central European Time)</p></li></ul><p><strong>On-Call</strong></p><ul><li><p>No fixed daily hours; work is performed within the standard operating window of 8:00 AM–5:00 PM CET.</p></li><li><p>Work availability may vary based on operational and project needs</p></li></ul><p></p><p>As a <strong>Mid-Level</strong> <strong>Graphic Designer / AI Specialist</strong> at Growmodo, you’ll work on a wide range of visual projects from concept to final delivery. You’ll use your design skills and AI tools to develop high-quality graphics that support branding, marketing, and communication goals for a variety of clients. You will be expected to contribute fresh creative ideas, collaborate with internal stakeholders, and continuously improve the visual quality of your work.</p><p></p><p><strong>Key Responsibilities</strong></p><ul><li><p><strong>Design Execution:</strong> Create logos, illustrations, layouts, and marketing materials using Adobe Illustrator, Photoshop, InDesign, and AI-enhanced design tools.</p></li><li><p><strong>AI Integration:</strong> Apply AI tools to enhance workflows and boost design productivity and creativity.</p></li><li><p><strong>Collaboration:</strong> Work with project managers, and other team members to align designs with project goals and client feedback.</p></li><li><p><strong>Quality Control:</strong> Ensure all designs meet visual standards, are brand-aligned, and are delivered on time with a high level of polish.</p></li></ul><h2><strong>What We\'re Looking For</strong></h2><p><strong>Must-Haves:</strong></p><ul><li><p>Strong skills in Adobe Creative Suite (Illustrator, Photoshop, InDesign).</p></li><li><p>Experience with AI-based design tools (e.g., Midjourney, Adobe Firefly, or similar).</p></li><li><p>A portfolio that demonstrates creative thinking, technical skill, and AI-enhanced work.</p></li><li><p>High attention to detail and commitment to delivering high-quality visuals.</p></li><li><p>Up-to-date knowledge of current design and AI trends.</p></li><li><p>Experience working in a fast-paced, collaborative design environment.</p></li><li><p>Ability to propose creative ideas and iterate based on constructive feedback.</p></li></ul><p></p><p><strong>Nice-To-Haves:</strong></p><ul><li><p>Familiarity with motion graphics or web design is a plus.</p></li></ul>
',
                                'apply_url' => 'https://careers.growmodo.com/o/graphic-designer-ai-expert',
                                'created_at' => '2026-05-21 22:15:57',
                                'updated_at' => '2026-05-21 22:15:57',
                                'company_logo' => 'https://cdn.dribbble.com/userupload/42932403/file/original-39b723425c3c910e05150ffe5f4d3e42.com?resize=24x24',
                                'website' => 'https://careers.growmodo.com/o/graphic-designer-ai-expert',
                            ),
                            40 => 
                            array (
                                'id' => 41,
                                'poster_id' => 77,
                                'title' => 'Senior UI/UX Engineer',
                                'company_name' => 'Boxem',
                                'location' => 'Remote',
                                'job_type' => 'Freelance',
                                'description' => 'UI/UX Engineer -- Boxem
Why "Engineer" and Not "Designer"
We\'re not looking for someone who makes things pretty and hands off a Figma file. We\'re looking for someone who thinks in systems. Someone who understands why a component works, not just how it looks. Someone who can sit with our engineering team, speak their language, and make decisions that hold up when code meets design.
We call this role an engineer because that\'s what it is. You\'ll solve problems, not just style them. You\'ll think about edge cases, data states, and responsive behavior because that\'s how your brain works. Creativity and engineering aren\'t opposites. The best interfaces come from people who have both.
About Boxem
Boxem is a SaaS platform for Amazon FBA sellers. Analytics, logistics, inventory management, shipping, and an AI assistant (BoxiAI) that helps sellers run their business smarter. We\'re growing fast, the product is live with paying customers, and the surface area is expanding.
The Role
You\'ll own the design layer of Boxem:
• Designing new features end-to-end, from concept to high-fidelity Figma screens to working with engineers on implementation
• Evolving our design system. We have a component library in Figma. You\'ll maintain it, extend it, and make sure every new feature fits the system
• Thinking through user flows. Not just individual screens, but how a seller moves through the product
• Collaborating directly with engineering. You\'re embedded with the team, not siloed
• Bringing your own ideas. We don\'t want a pixel pusher waiting for instructions.
• Designing for data. Dashboards, tables, charts, metrics. Dense information that feels clear and actionable
• Annotating and documenting designs in Figma. You\'ll create developer-ready specs with redlines, spacing callouts, interaction notes, and component documentation so engineers know exactly what to build without guessing
What We\'re Looking For
• Strong portfolio showing complex product design (not just landing pages)
• Deep Figma proficiency. Components, auto-layout, variants, prototyping, and developer handoff annotations
• Systems thinking. You design components and patterns, not just pages
• Experience designing data-rich interfaces
• Ability to articulate why behind every design decision
• Comfort working alongside engineers
• Mobile-responsive design experience
• Experience creating structured Figma files with clear annotations, comments, and specs that engineers can reference directly during development
Strong Signals
• Understanding of front-end code (HTML/CSS/React/Tailwind)
• SaaS or B2B product design experience
• User research or data-informed design experience
• Startup or small team experience
What We Value
• Critical thinking over convention
• Ownership. This is your domain
• Speed with quality
• Strong opinions, loosely held
• Positivity and collaboration. No negativity, no ego wars',
                                'description_html' => '
<p><strong>UI/UX Engineer -- Boxem</strong></p><p><strong>Why "Engineer" and Not "Designer"</strong></p><p>We\'re not looking for someone who makes things pretty and hands off a Figma file. We\'re looking for someone who thinks in systems. Someone who understands why a component works, not just how it looks. Someone who can sit with our engineering team, speak their language, and make decisions that hold up when code meets design.</p><p>We call this role an engineer because that\'s what it is. You\'ll solve problems, not just style them. You\'ll think about edge cases, data states, and responsive behavior because that\'s how your brain works. Creativity and engineering aren\'t opposites. The best interfaces come from people who have both.</p><p><strong>About Boxem</strong></p><p>Boxem is a SaaS platform for Amazon FBA sellers. Analytics, logistics, inventory management, shipping, and an AI assistant (BoxiAI) that helps sellers run their business smarter. We\'re growing fast, the product is live with paying customers, and the surface area is expanding.</p><p><strong>The Role</strong></p><p>You\'ll own the design layer of Boxem:</p><p>• Designing new features end-to-end, from concept to high-fidelity Figma screens to working with engineers on implementation</p><p>• Evolving our design system. We have a component library in Figma. You\'ll maintain it, extend it, and make sure every new feature fits the system</p><p>• Thinking through user flows. Not just individual screens, but how a seller moves through the product</p><p>• Collaborating directly with engineering. You\'re embedded with the team, not siloed</p><p>• Bringing your own ideas. We don\'t want a pixel pusher waiting for instructions. </p><p>• Designing for data. Dashboards, tables, charts, metrics. Dense information that feels clear and actionable</p><p>• Annotating and documenting designs in Figma. You\'ll create developer-ready specs with redlines, spacing callouts, interaction notes, and component documentation so engineers know exactly what to build without guessing</p><p><strong>What We\'re Looking For</strong></p><p>• Strong portfolio showing complex product design (not just landing pages)</p><p>• Deep Figma proficiency. Components, auto-layout, variants, prototyping, and developer handoff annotations</p><p>• Systems thinking. You design components and patterns, not just pages</p><p>• Experience designing data-rich interfaces</p><p>• Ability to articulate why behind every design decision</p><p>• Comfort working alongside engineers</p><p>• Mobile-responsive design experience</p><p>• Experience creating structured Figma files with clear annotations, comments, and specs that engineers can reference directly during development</p><p><strong>Strong Signals</strong></p><p>• Understanding of front-end code (HTML/CSS/React/Tailwind)</p><p>• SaaS or B2B product design experience</p><p>• User research or data-informed design experience</p><p>• Startup or small team experience</p><p><strong>What We Value</strong></p><p>• Critical thinking over convention</p><p>• Ownership. This is your domain</p><p>• Speed with quality</p><p>• Strong opinions, loosely held</p><p>• Positivity and collaboration. No negativity, no ego wars</p>
',
                                'apply_url' => 'https://docs.google.com/forms/d/e/1FAIpQLSemIMmz5CszO83RQzHI1tRDKOOB-wtc6CciGh6_SOqHACr5Ug/viewform',
                                'created_at' => '2026-05-21 22:16:00',
                                'updated_at' => '2026-05-21 22:16:00',
                                'company_logo' => 'https://cdn.dribbble.com/userupload/47002473/file/e0a38dbadfc6de7c513660ce00b97251.png?resize=24x24',
                                'website' => 'https://docs.google.com/forms/d/e/1FAIpQLSemIMmz5CszO83RQzHI1tRDKOOB-wtc6CciGh6_SOqHACr5Ug/viewform',
                            ),
                            41 => 
                            array (
                                'id' => 42,
                                'poster_id' => 33,
                                'title' => 'Senior Product Designer',
                                'company_name' => 'Trane Technologies',
                                'location' => 'Davidson, NC',
                                'job_type' => 'Full-time',
                                'description' => 'Job Summary:
The Senior Product Designer will be responsible for creating sophisticated, UI‑forward interfaces across web and mobile applications, translating complex user and business needs into intuitive, high‑quality designs. Drives end‑to‑end UI design from discovery through delivery to ensure ease of use, task efficiency, and measurable customer value.
What you will do:
Lead UI‑heavy experience design for key features across web and mobile, from early concept through final specifications.
Conduct and synthesize evaluations of user interactions (ease of use, utility, perceived value, task efficiency).
Translate complex user needs and business requirements into advanced UI patterns, flows, and feature concepts.
Create detailed process flows, wireframes, and high‑fidelity prototypes to communicate design strategy and intent.
Partner with product, engineering, and research to align on scope, constraints, and delivery plans.
Collaborate with research partners on planning and running usability tests and applying insights to improve designs.
Ensure UI solutions follow the design system and elevate overall visual and interaction quality.
Mentor junior designers through feedback, pairing, and craft guidance.
What you will bring:
Proven experience designing UI‑heavy digital products for web and/or mobile with shipped outcomes.
Strong portfolio demonstrating interaction design, high‑fidelity UI craft, and systems thinking.
Expertise with modern design tools (e.g., Figma) for wireframing, prototyping, and production‑ready handoff.
Demonstrated ability to independently lead workstreams and influence cross‑functional partners.
Experience applying usability test insights to improve designs.
Experience mentoring or guiding other designers and improving team quality through critique and standards.
Contribution to Strategy and Vision
Supports long‑term (5‑year+) roadmap development by defining scalable UI patterns and high‑quality interfaces that shape future product experiences.
Contributes to short‑term (1–2‑year) operational strategy through clear design planning, prototype validation, and alignment with cross‑functional delivery teams.
Executes strategy by delivering high‑quality, scalable UI solutions that reduce friction, increase efficiency, and enhance customer satisfaction.
Performs tactical work by specifying patterns, components, workflows, and standards aligned with organizational product strategy.
Improves business outcomes by reducing customer effort, increasing adoption and retention, and lowering support needs.
Strengthens ROI by reducing rework, accelerating delivery, and applying repeatable UI patterns that lower build costs and time to market.
Key Skills of Role
Technical Skills (Advanced)
UI and interaction design
Information architecture and task‑flow design
High‑fidelity visual design, layout, and typography
Prototyping and micro‑interactions (Figma)
Design system usage and component‑based UI design
Accessibility basics (WCAG‑minded design)
Behavioral Skills (Advanced)
Customer empathy and problem framing
Critical thinking and clear design rationale
Ownership, accountability, and follow‑through
Communication and design storytelling
Quality bar‑setting and constructive critique
Managerial/Leadership Skills (Intermediate–Advanced)
Cross‑functional influence (product, engineering, research)
Mentoring and coaching junior designers
Planning and scoping design work for features or streams
Annual Base Salary Range or Hourly Base Pay Range:
$117,673.33 - $164,675.00
Compensation Type:
Salary
Incentive Eligible:
No
Sales Commission Eligible:
No
Disclaimer
: We strive to provide competitive compensation for this position, tailored to a variety of factors. The actual compensation will depend on elements such as seniority, merit, geographic location, education, experience,  travel requirements, and union designation.   Our compensation range is generally based on the national average for the country.  Additionally, benefits may vary depending on the region, business alignment, union involvement, and employee status.
Safety Sensitive Role:
No
The company designates certain roles as Safety Sensitive. Safety Sensitive roles may require that you pass additional drug screening.
We offer competitive compensation and comprehensive benefits and programs. We are an equal opportunity employer; all qualified applicants will receive consideration for employment without regard to race, color, religion, sex, sexual orientation, gender identity, national origin, pregnancy, age, marital status, disability, status as a protected veteran, or any legally protected status.',
                                'description_html' => '
<p><strong>Job Summary:</strong></p><p>The Senior Product Designer will be responsible for creating sophisticated, UI‑forward interfaces across web and mobile applications, translating complex user and business needs into intuitive, high‑quality designs. Drives end‑to‑end UI design from discovery through delivery to ensure ease of use, task efficiency, and measurable customer value.</p><p></p><p><strong>What you will do:  </strong>  </p><ul><li><p>Lead UI‑heavy experience design for key features across web and mobile, from early concept through final specifications.</p></li><li><p>Conduct and synthesize evaluations of user interactions (ease of use, utility, perceived value, task efficiency).</p></li><li><p>Translate complex user needs and business requirements into advanced UI patterns, flows, and feature concepts.</p></li><li><p>Create detailed process flows, wireframes, and high‑fidelity prototypes to communicate design strategy and intent.</p></li><li><p>Partner with product, engineering, and research to align on scope, constraints, and delivery plans.</p></li><li><p>Collaborate with research partners on planning and running usability tests and applying insights to improve designs.</p></li><li><p>Ensure UI solutions follow the design system and elevate overall visual and interaction quality.</p></li><li><p>Mentor junior designers through feedback, pairing, and craft guidance.</p></li></ul><p></p><p><strong>What you will bring:</strong>  </p><ul><li><p>Proven experience designing UI‑heavy digital products for web and/or mobile with shipped outcomes.</p></li><li><p>Strong portfolio demonstrating interaction design, high‑fidelity UI craft, and systems thinking.</p></li><li><p>Expertise with modern design tools (e.g., Figma) for wireframing, prototyping, and production‑ready handoff.</p></li><li><p>Demonstrated ability to independently lead workstreams and influence cross‑functional partners.</p></li><li><p>Experience applying usability test insights to improve designs.</p></li><li><p>Experience mentoring or guiding other designers and improving team quality through critique and standards.  </p></li></ul><p></p><p><strong>Contribution to Strategy and Vision</strong></p><ul><li><p>Supports long‑term (5‑year+) roadmap development by defining scalable UI patterns and high‑quality interfaces that shape future product experiences.</p></li><li><p>Contributes to short‑term (1–2‑year) operational strategy through clear design planning, prototype validation, and alignment with cross‑functional delivery teams. </p></li><li><p>Executes strategy by delivering high‑quality, scalable UI solutions that reduce friction, increase efficiency, and enhance customer satisfaction.</p></li><li><p>Performs tactical work by specifying patterns, components, workflows, and standards aligned with organizational product strategy.</p></li><li><p>Improves business outcomes by reducing customer effort, increasing adoption and retention, and lowering support needs.</p></li><li><p>Strengthens ROI by reducing rework, accelerating delivery, and applying repeatable UI patterns that lower build costs and time to market.</p></li></ul><p></p><p></p><p><strong>Key Skills of Role</strong></p><p><strong>Technical Skills (Advanced)</strong></p><ul><li><p>UI and interaction design</p></li><li><p>Information architecture and task‑flow design</p></li><li><p>High‑fidelity visual design, layout, and typography</p></li><li><p>Prototyping and micro‑interactions (Figma)</p></li><li><p>Design system usage and component‑based UI design</p></li><li><p>Accessibility basics (WCAG‑minded design)</p></li></ul><p></p><p><strong>Behavioral Skills (Advanced)</strong></p><ul><li><p>Customer empathy and problem framing</p></li><li><p>Critical thinking and clear design rationale</p></li><li><p>Ownership, accountability, and follow‑through</p></li><li><p>Communication and design storytelling</p></li><li><p>Quality bar‑setting and constructive critique</p></li></ul><p></p><p><strong>Managerial/Leadership Skills (Intermediate–Advanced)</strong></p><ul><li><p>Cross‑functional influence (product, engineering, research)</p></li><li><p>Mentoring and coaching junior designers</p></li><li><p>Planning and scoping design work for features or streams</p></li></ul><p></p><p></p><p><strong>Annual Base Salary Range or Hourly Base Pay Range:</strong></p><p>$117,673.33 - $164,675.00</p><p><strong>Compensation Type:</strong></p><p>Salary</p><p><strong>Incentive Eligible:</strong></p><p>No</p><p><strong>Sales Commission Eligible:</strong></p><p>No</p><p></p><p><strong>Disclaimer</strong>: We strive to provide competitive compensation for this position, tailored to a variety of factors. The actual compensation will depend on elements such as seniority, merit, geographic location, education, experience,  travel requirements, and union designation.   Our compensation range is generally based on the national average for the country.  Additionally, benefits may vary depending on the region, business alignment, union involvement, and employee status.</p><p></p><p><strong>Safety Sensitive Role:</strong></p><p>No</p><p>The company designates certain roles as Safety Sensitive. Safety Sensitive roles may require that you pass additional drug screening.</p><p></p><p>We offer competitive compensation and comprehensive benefits and programs. We are an equal opportunity employer; all qualified applicants will receive consideration for employment without regard to race, color, religion, sex, sexual orientation, gender identity, national origin, pregnancy, age, marital status, disability, status as a protected veteran, or any legally protected status.</p>
',
                                'apply_url' => 'https://careers.tranetechnologies.com/global/en/job/TRTEGLOBAL92601747EXTERNALENGLOBAL/Senior-Product-Designer',
                                'created_at' => '2026-05-21 22:16:03',
                                'updated_at' => '2026-05-21 22:16:03',
                                'company_logo' => 'https://cdn.dribbble.com/userupload/47662393/file/bc189974d0e3f7d47470b48f2f54c8bc.png?resize=24x24',
                                'website' => 'https://careers.tranetechnologies.com/global/en/job/TRTEGLOBAL92601747EXTERNALENGLOBAL/Senior-Product-Designer',
                            ),
                            42 => 
                            array (
                                'id' => 43,
                                'poster_id' => 62,
                                'title' => 'Performance Creative Designer',
                                'company_name' => 'Naked Nutrition',
                                'location' => 'Remote',
                                'job_type' => 'Freelance',
                                'description' => 'Naked Nutrition, a premium U.S. nutrition brand, is seeking a creative designer for long-term contract work across email, paid social, and digital campaigns. This is a hands-on role for someone with excellent taste, strong ecommerce instincts, and real fluency using AI.
What you’ll do
Design full marketing emails and lifecycle flow emails
Create static ads for paid social
Develop creative variations for A/B testing
Support organic social and occasional onsite creative
Nice to have: AI-assisted video or motion creative
What we’re looking for
Strong DTC/ecommerce portfolio
Experience designing emails and paid social ads
Strong layout, typography, and visual taste
Ability to turn briefs and references into polished concepts quickly
Serious use of AI in your creative workflow
Good instincts for hooks, CTAs, and creative testing
Requirements
Email and paid social examples required
Wellness, beauty, fitness, CPG, or premium consumer brand experience preferred
15–30 hrs/week, remote
North America or Europe preferred
To apply
Please no cover letters. Simply apply here:
https://forms.gle/FvCgfpQUFWBRLdyu7
Qualified candidates may be asked to complete a short paid test project.',
                                'description_html' => '
<p>Naked Nutrition, a premium U.S. nutrition brand, is seeking a creative designer for long-term contract work across email, paid social, and digital campaigns. This is a hands-on role for someone with excellent taste, strong ecommerce instincts, and real fluency using AI.</p><h2>What you’ll do</h2><ul><li><p>Design full marketing emails and lifecycle flow emails</p></li><li><p>Create static ads for paid social</p></li><li><p>Develop creative variations for A/B testing</p></li><li><p>Support organic social and occasional onsite creative</p></li><li><p>Nice to have: AI-assisted video or motion creative</p></li></ul><h2>What we’re looking for</h2><ul><li><p>Strong DTC/ecommerce portfolio</p></li><li><p>Experience designing emails and paid social ads</p></li><li><p>Strong layout, typography, and visual taste</p></li><li><p>Ability to turn briefs and references into polished concepts quickly</p></li><li><p>Serious use of AI in your creative workflow</p></li><li><p>Good instincts for hooks, CTAs, and creative testing</p></li></ul><h2>Requirements</h2><ul><li><p>Email and paid social examples required</p></li><li><p>Wellness, beauty, fitness, CPG, or premium consumer brand experience preferred</p></li><li><p>15–30 hrs/week, remote</p></li><li><p>North America or Europe preferred</p></li></ul><h2>To apply</h2><p>Please no cover letters. Simply apply here: <a href="https://forms.gle/FvCgfpQUFWBRLdyu7">https://forms.gle/FvCgfpQUFWBRLdyu7</a></p><p>Qualified candidates may be asked to complete a short paid test project.</p>
',
                                'apply_url' => 'https://docs.google.com/forms/d/e/1FAIpQLScVJ066VEmMZzb1dX3QFc2yAEadGCVhBAQVuf65wZu9zlazNQ/viewform',
                                'created_at' => '2026-05-21 22:16:05',
                                'updated_at' => '2026-05-21 22:16:05',
                                'company_logo' => 'https://cdn.dribbble.com/userupload/47661511/file/6ff7269e9220cf4c3ba8f5763c5663eb.jpg?resize=24x24',
                                'website' => 'https://docs.google.com/forms/d/e/1FAIpQLScVJ066VEmMZzb1dX3QFc2yAEadGCVhBAQVuf65wZu9zlazNQ/viewform',
                            ),
                            43 => 
                            array (
                                'id' => 44,
                                'poster_id' => 77,
                                'title' => 'Branding & Packaging Designer',
                                'company_name' => 'Ejam Inc',
                                'location' => 'Remote',
                                'job_type' => 'Full-time',
                                'description' => 'Description
Location:
Remote Latin America
Compensation:
$3,000 - $4,000
Hours
: 9am - 6pm PST
About Us
eJam is a bootstrapped consumer products company that has built, scaled, and exited multiple brands — all without ever taking a dollar of outside capital. Our portfolio includes category leaders ranked at the top of Amazon, carried in major retailers nationwide, and sold across DTC, marketplaces, and every channel in between.
We’re not a startup hoping something works. We’re a team that has done it repeatedly — taken products from zero to eight figures, landed them on retail shelves nationwide, and built real brands that consumers love. We operate like a holding company with the speed of a startup: small team, no bureaucracy, massive ownership.
This is the place where you’ll see the entire machine — sourcing, product development, packaging, manufacturing, compliance, marketing, marketplace strategy, retail — all under one roof. If you want to learn how consumer products actually get built and shipped at scale, there is no faster education than this.
The Role
We\'re looking for a Branding & Packaging Designer who can own the visual identity of our brands across every consumer touchpoint — from the physical package on a retail shelf to the ad in a social feed to the email in an inbox. This isn\'t a production design role. You\'ll be a core creative voice shaping how our brands show up in the world.
What You\'ll Do Everyday
Packaging & Label Design: Design and iterate on product packaging, labels, and inserts for retail, Amazon, and DTC — working within print production requirements (dielines, bleeds, color separations, substrate considerations).
Brand Identity & Systems: Maintain and evolve brand guidelines across our portfolio. Ensure visual consistency from shelf to screen.
Digital & Social Creatives: Design high-performing assets for paid social, organic content, and marketplace listings. Create static and animated (GIF/MP4) ad creatives.
Email & Web Design: Conceptualize and design email campaigns, landing pages, banners, and website assets that convert.
Retail-Ready Assets: Produce sell sheets, trade decks, and retailer-facing materials that meet buyer presentation standards.
Cross-Functional Collaboration: Work directly with product development, marketing, and growth teams from concept through production. You\'ll be involved early — not handed a brief after all decisions are made.
Requirements
You\'re a Fit If
3+ years of graphic design experience with meaningful work in packaging design and/or brand identity for consumer products (CPG, beauty, food & bev, supplements, or similar).
A portfolio that shows strong packaging or branding work — not just digital. We want to see structural thinking: how you approach a dieline, a shelf presence problem, or a brand system.
Proficiency in Adobe Creative Suite (Illustrator and Photoshop required; InDesign a plus).
Experience with Figma for digital design workflows.
Bonus: After Effects, Cinema 4D, or Keyshot for 3D renders and motion.
Understanding of print production — file prep, color management, vendor communication.
Strong typography, layout, and color sense.
Ability to manage multiple projects in a fast-moving environment with minimal hand-holding.
Excellent English communication skills (written and verbal).
A proactive, ownership-driven mindset — you bring ideas, not just executions.
Benefits
What We Offer
Quarterly performance bonuses
Paid time off & observed local holidays
Fully remote — work from anywhere in LATAM
Real brand ownership — your work ends up on retail shelves, not in a pitch deck
Fast-track growth in a small, high-velocity team',
                                'description_html' => '
<h2><strong>Description</strong></h2><p><strong>Location:</strong> Remote Latin America </p><p><strong>Compensation:</strong> $3,000 - $4,000 </p><p><strong>Hours</strong>: 9am - 6pm PST</p><p></p><p><strong>About Us</strong></p><p>eJam is a bootstrapped consumer products company that has built, scaled, and exited multiple brands — all without ever taking a dollar of outside capital. Our portfolio includes category leaders ranked at the top of Amazon, carried in major retailers nationwide, and sold across DTC, marketplaces, and every channel in between.</p><p>We’re not a startup hoping something works. We’re a team that has done it repeatedly — taken products from zero to eight figures, landed them on retail shelves nationwide, and built real brands that consumers love. We operate like a holding company with the speed of a startup: small team, no bureaucracy, massive ownership.</p><p>This is the place where you’ll see the entire machine — sourcing, product development, packaging, manufacturing, compliance, marketing, marketplace strategy, retail — all under one roof. If you want to learn how consumer products actually get built and shipped at scale, there is no faster education than this.</p><p></p><p><strong>The Role</strong></p><p>We\'re looking for a Branding &amp; Packaging Designer who can own the visual identity of our brands across every consumer touchpoint — from the physical package on a retail shelf to the ad in a social feed to the email in an inbox. This isn\'t a production design role. You\'ll be a core creative voice shaping how our brands show up in the world.</p><p></p><p><strong>What You\'ll Do Everyday</strong></p><ul><li><p>Packaging &amp; Label Design: Design and iterate on product packaging, labels, and inserts for retail, Amazon, and DTC — working within print production requirements (dielines, bleeds, color separations, substrate considerations).</p></li><li><p>Brand Identity &amp; Systems: Maintain and evolve brand guidelines across our portfolio. Ensure visual consistency from shelf to screen.</p></li><li><p>Digital &amp; Social Creatives: Design high-performing assets for paid social, organic content, and marketplace listings. Create static and animated (GIF/MP4) ad creatives.</p></li><li><p>Email &amp; Web Design: Conceptualize and design email campaigns, landing pages, banners, and website assets that convert.</p></li><li><p>Retail-Ready Assets: Produce sell sheets, trade decks, and retailer-facing materials that meet buyer presentation standards.</p></li><li><p>Cross-Functional Collaboration: Work directly with product development, marketing, and growth teams from concept through production. You\'ll be involved early — not handed a brief after all decisions are made.</p></li></ul><h2><strong>Requirements</strong></h2><p><strong>You\'re a Fit If</strong></p><ul><li><p>3+ years of graphic design experience with meaningful work in packaging design and/or brand identity for consumer products (CPG, beauty, food &amp; bev, supplements, or similar).</p></li><li><p>A portfolio that shows strong packaging or branding work — not just digital. We want to see structural thinking: how you approach a dieline, a shelf presence problem, or a brand system.</p></li><li><p>Proficiency in Adobe Creative Suite (Illustrator and Photoshop required; InDesign a plus).</p></li><li><p>Experience with Figma for digital design workflows.</p></li><li><p>Bonus: After Effects, Cinema 4D, or Keyshot for 3D renders and motion.</p></li><li><p>Understanding of print production — file prep, color management, vendor communication.</p></li><li><p>Strong typography, layout, and color sense.</p></li><li><p>Ability to manage multiple projects in a fast-moving environment with minimal hand-holding.</p></li><li><p>Excellent English communication skills (written and verbal).</p></li><li><p>A proactive, ownership-driven mindset — you bring ideas, not just executions.</p></li></ul><p></p><h2><strong>Benefits</strong></h2><p><strong>What We Offer</strong></p><ul><li><p>Quarterly performance bonuses</p></li><li><p>Paid time off &amp; observed local holidays</p></li><li><p>Fully remote — work from anywhere in LATAM</p></li><li><p>Real brand ownership — your work ends up on retail shelves, not in a pitch deck</p></li><li><p>Fast-track growth in a small, high-velocity team</p></li></ul>
',
                                'apply_url' => 'https://apply.workable.com/ejam/j/625B909094/apply/',
                                'created_at' => '2026-05-21 22:16:08',
                                'updated_at' => '2026-05-21 22:16:08',
                                'company_logo' => 'https://cdn.dribbble.com/userupload/47324848/file/44959b12b9105c2e1894f4bf2600e287.jpeg?resize=24x24',
                                'website' => 'https://apply.workable.com/ejam/j/625B909094/apply/',
                            ),
                            44 => 
                            array (
                                'id' => 45,
                                'poster_id' => 85,
                            'title' => 'Diseñador de Producto Senior (UX/UI)',
                                'company_name' => 'OTIF',
                                'location' => 'Remote',
                                'job_type' => 'Full-time',
                                'description' => 'Empresa:
OTIF
Ubicación:
Remoto
Tipo de empleo:
Tiempo completo
Descripción del puesto:
En OTIF estamos transformando la industria logística mediante la digitalización y la integración de redes globales de suministro. Buscamos un Diseñador de Producto Senior con sólida experiencia en UX/UI para liderar el diseño de soluciones digitales que optimicen la orquestación de cadenas de suministro, plataformas de seguimiento en tiempo real y herramientas de integración transfronteriza.
Responsabilidades principales:
●        Liderar el diseño y la experiencia de usuario end-to-end de productos digitales, desde la investigación de usuarios hasta la implementación de interfaces intuitivas, eficientes y accesibles.
●        Colaborar estrechamente con equipos de producto, desarrollo, operaciones, y stakeholders para crear wireframes, prototipos y flujos de usuario que resuelvan problemáticas complejas de logística, tales como personalización de envíos, garantías de precio y gestión de capacidad de carga.
●        Planear y ejecutar pruebas de usabilidad, así como iteraciones basadas en retroalimentación de usuarios clave (shippers, carriers y freight forwarders).
●        Diseñar experiencias responsivas para aplicaciones web y móviles enfocadas en rastreo en tiempo real, facturación consolidada y operación de ecosistemas regionales.
●        Contribuir a la visión estratégica del producto, considerando retos como la interoperabilidad entre proveedores, la adopción de modelos digitales y la fragmentación del mercado logístico.
●        Ser mentor a diseñadores junior y promover buenas prácticas de UX/UI dentro del equipo.
Requisitos:
●        Mínimo 5 años de experiencia como Diseñador de Producto o UX/UI en entornos digitales, preferentemente tecnología B2B.
●        Dominio avanzado de herramientas de diseño como Figma, Adobe XD, Sketch o similares. Experiencia en prototipado con InVision,
Proto.io
u otras plataformas equivalentes.
●        Conocimientos sólidos en UX research, diseño de user journeys, pruebas A/B y principios de accesibilidad (WCAG).
●        Experiencia diseñando plataformas digitales complejas, con énfasis en datos en tiempo real y visualización de información (por ejemplo, dashboards de tracking de envíos).
●        Licenciatura en Diseño Gráfico, Interacción Humano-Computadora o carrera afín. Certificaciones en UX/UI son consideradas un plus.
Habilidades blandas:
●        Excelente comunicación, capacidad para trabajar con equipos multidisciplinarios y enfoque a resultados en entornos ágiles.
Idiomas:
●        Español fluido e inglés avanzado para colaboración internacional.
Opcionales:
●        Conocimientos en logística o supply chain son deseables.
Ofrecemos:
●        Salario competitivo, según experiencia y perfil.
●        Prestaciones que incluyen esquema de trabajo remoto, capacitaciones en tendencias digitales y plataformas líderes del sector logístico.
●        Ambiente innovador con enfoque en retorno de inversión tecnológica y toma de decisiones basada en datos.
●        Oportunidad de generar impacto global mediante el desarrollo de soluciones utilizadas en más de 200 países.
Postulación:
●        Las personas interesadas deberán enviar su CV y portafolio a los correos:
rh@otif.mx
y
marcela.hernandez@otif.mx
.',
                                'description_html' => '
<p><strong>Empresa:</strong> OTIF</p><p><strong>Ubicación:</strong> Remoto</p><p><strong>Tipo de empleo:</strong> Tiempo completo</p><p></p><p><strong>Descripción del puesto:</strong></p><p>En OTIF estamos transformando la industria logística mediante la digitalización y la integración de redes globales de suministro. Buscamos un Diseñador de Producto Senior con sólida experiencia en UX/UI para liderar el diseño de soluciones digitales que optimicen la orquestación de cadenas de suministro, plataformas de seguimiento en tiempo real y herramientas de integración transfronteriza.</p><p></p><p><strong>Responsabilidades principales:</strong></p><p>●        Liderar el diseño y la experiencia de usuario end-to-end de productos digitales, desde la investigación de usuarios hasta la implementación de interfaces intuitivas, eficientes y accesibles.</p><p>●        Colaborar estrechamente con equipos de producto, desarrollo, operaciones, y stakeholders para crear wireframes, prototipos y flujos de usuario que resuelvan problemáticas complejas de logística, tales como personalización de envíos, garantías de precio y gestión de capacidad de carga.</p><p>●        Planear y ejecutar pruebas de usabilidad, así como iteraciones basadas en retroalimentación de usuarios clave (shippers, carriers y freight forwarders).</p><p>●        Diseñar experiencias responsivas para aplicaciones web y móviles enfocadas en rastreo en tiempo real, facturación consolidada y operación de ecosistemas regionales.</p><p>●        Contribuir a la visión estratégica del producto, considerando retos como la interoperabilidad entre proveedores, la adopción de modelos digitales y la fragmentación del mercado logístico.</p><p>●        Ser mentor a diseñadores junior y promover buenas prácticas de UX/UI dentro del equipo.</p><p></p><p><strong>Requisitos:</strong></p><p>●        Mínimo 5 años de experiencia como Diseñador de Producto o UX/UI en entornos digitales, preferentemente tecnología B2B.</p><p>●        Dominio avanzado de herramientas de diseño como Figma, Adobe XD, Sketch o similares. Experiencia en prototipado con InVision, <a href="http://Proto.io">Proto.io</a> u otras plataformas equivalentes.</p><p>●        Conocimientos sólidos en UX research, diseño de user journeys, pruebas A/B y principios de accesibilidad (WCAG).</p><p>●        Experiencia diseñando plataformas digitales complejas, con énfasis en datos en tiempo real y visualización de información (por ejemplo, dashboards de tracking de envíos).</p><p>●        Licenciatura en Diseño Gráfico, Interacción Humano-Computadora o carrera afín. Certificaciones en UX/UI son consideradas un plus.</p><p></p><p><strong>Habilidades blandas:</strong></p><p>●        Excelente comunicación, capacidad para trabajar con equipos multidisciplinarios y enfoque a resultados en entornos ágiles.</p><p></p><p><strong>Idiomas:</strong></p><p>●        Español fluido e inglés avanzado para colaboración internacional.</p><p> </p><p><strong>Opcionales:</strong></p><p>●        Conocimientos en logística o supply chain son deseables.</p><p></p><p><strong>Ofrecemos:</strong></p><p>●        Salario competitivo, según experiencia y perfil.</p><p>●        Prestaciones que incluyen esquema de trabajo remoto, capacitaciones en tendencias digitales y plataformas líderes del sector logístico.</p><p>●        Ambiente innovador con enfoque en retorno de inversión tecnológica y toma de decisiones basada en datos.</p><p>●        Oportunidad de generar impacto global mediante el desarrollo de soluciones utilizadas en más de 200 países.</p><p></p><p><strong>Postulación:</strong></p><p>●        Las personas interesadas deberán enviar su CV y portafolio a los correos: <a href="mailto:rh@otif.mx">rh@otif.mx</a> y <a href="mailto:marcela.hernandez@otif.mx">marcela.hernandez@otif.mx</a>.</p>
',
                                'apply_url' => 'https://co.indeed.com/viewjob?jk=bbe43c7c06efd502&from=shareddesktop_copy',
                                'created_at' => '2026-05-21 22:16:11',
                                'updated_at' => '2026-05-21 22:16:11',
                                'company_logo' => 'https://cdn.dribbble.com/userupload/46316520/file/971c34d613035ff2e4625345b05f4b00.jpg?resize=24x24',
                                'website' => 'https://co.indeed.com/viewjob?jk=bbe43c7c06efd502&from=shareddesktop_copy',
                            ),
                            45 => 
                            array (
                                'id' => 46,
                                'poster_id' => 17,
                                'title' => 'Email Designer',
                                'company_name' => 'Stimulate',
                                'location' => 'United States',
                                'job_type' => 'Freelance',
                                'description' => 'Stimulate is hiring an Email Designer to create high-performing email creative for a variety of ecommerce brands.
Stimulate is an
email marketing agency
specializing in email and SMS marketing, helping brands increase customer lifetime value through strategic lifecycle marketing.
As our Email Designer, you’ll work closely with our strategy and copy teams to design conversion-focused email campaigns and automation creative for ecommerce clients.
What We\'re Looking For
2+ years of email or ad design experience
Strong proficiency in Figma
Experience working with ecommerce brands
Ability to design high-converting marketing emails
Strong attention to detail and ability to follow brand guidelines
Portfolio showcasing email or marketing design work
You’ll be designing email campaigns for a range of ecommerce clients across multiple industries, helping turn strategy and copy into compelling visuals that drive clicks and revenue.
If you love designing marketing creative that performs, we’d love to see your work.',
                                'description_html' => '
<p>Stimulate is hiring an Email Designer to create high-performing email creative for a variety of ecommerce brands.</p><p>Stimulate is an <a href="https://www.stimulate.agency/services/email-marketing">email marketing agency</a> specializing in email and SMS marketing, helping brands increase customer lifetime value through strategic lifecycle marketing.</p><p>As our Email Designer, you’ll work closely with our strategy and copy teams to design conversion-focused email campaigns and automation creative for ecommerce clients.</p><p>What We\'re Looking For</p><ul><li><p>2+ years of email or ad design experience</p></li><li><p>Strong proficiency in Figma</p></li><li><p>Experience working with ecommerce brands</p></li><li><p>Ability to design high-converting marketing emails</p></li><li><p>Strong attention to detail and ability to follow brand guidelines</p></li><li><p>Portfolio showcasing email or marketing design work</p></li></ul><p>You’ll be designing email campaigns for a range of ecommerce clients across multiple industries, helping turn strategy and copy into compelling visuals that drive clicks and revenue.</p><p>If you love designing marketing creative that performs, we’d love to see your work.</p>
',
                                'apply_url' => 'https://forms.clickup.com/10513500/f/a0v2w-102177/YL30VEXGRBZXB3KO6S',
                                'created_at' => '2026-05-21 22:16:13',
                                'updated_at' => '2026-05-21 22:16:13',
                                'company_logo' => 'https://cdn.dribbble.com/userupload/46974002/file/1359260b4c8530760161d2a3c63329c9.png?resize=24x24',
                                'website' => 'https://forms.clickup.com/10513500/f/a0v2w-102177/YL30VEXGRBZXB3KO6S',
                            ),
                            46 => 
                            array (
                                'id' => 47,
                                'poster_id' => 10,
                                'title' => 'Graphic Designer',
                                'company_name' => 'KAP STRATEGIES',
                                'location' => 'Remote',
                                'job_type' => 'Full-time',
                                'description' => 'A consulting firm that specializes in direct mail is in need of a graphic designer with experience in designing mail. Our firm mostly works with conservative members from the federal level all the way down to local races.
At our firm, projects move at a very quick pace. Edits are constant and we need a designer who is prepared to be flexible, answering emails from early in the morning to later in the evening, and very quick, turning around the first draft for new pieces in no more than twenty-four hours and turning around edits on ongoing projects within four hours.
Our firm has a reputation for continuously creating original content, so we are looking for a designer who is creative, intuitive, and able to create and work on multiple pieces at once without the design of those individual pieces overlapping. We are constantly striving to create new and intriguing work product, so we need a designer who will be able to help us stand out.
Skills and expertise:
- Cover Art Design
- Logo Design
- Print Design
- Graphic Design
- Adobe Photoshop
- Adobe InDesign
- Adobe Illustrator
Email your resume, portfolio, and/or cover letter to KAPJobs@kapstrategies.com.',
                                'description_html' => '
<p>A consulting firm that specializes in direct mail is in need of a graphic designer with experience in designing mail. Our firm mostly works with conservative members from the federal level all the way down to local races.</p><p>At our firm, projects move at a very quick pace. Edits are constant and we need a designer who is prepared to be flexible, answering emails from early in the morning to later in the evening, and very quick, turning around the first draft for new pieces in no more than twenty-four hours and turning around edits on ongoing projects within four hours.</p><p>Our firm has a reputation for continuously creating original content, so we are looking for a designer who is creative, intuitive, and able to create and work on multiple pieces at once without the design of those individual pieces overlapping. We are constantly striving to create new and intriguing work product, so we need a designer who will be able to help us stand out.</p><p>Skills and expertise:</p><p>- Cover Art Design</p><p>- Logo Design</p><p>- Print Design</p><p>- Graphic Design</p><p>- Adobe Photoshop</p><p>- Adobe InDesign</p><p>- Adobe Illustrator</p><p>Email your resume, portfolio, and/or cover letter to KAPJobs@kapstrategies.com. </p>
',
                                'apply_url' => 'https://docs.google.com/forms/d/e/1FAIpQLSd5KqME7RHgcmS0Y3zpln8JJNwq91pM1nYbGGbKMtwSE3NQEQ/closedform',
                                'created_at' => '2026-05-21 22:16:16',
                                'updated_at' => '2026-05-21 22:16:16',
                                'company_logo' => 'https://cdn.dribbble.com/userupload/45990135/file/33569adc7d67204337a9422b1a0499ac.png?resize=24x24',
                                'website' => 'https://docs.google.com/forms/d/e/1FAIpQLSd5KqME7RHgcmS0Y3zpln8JJNwq91pM1nYbGGbKMtwSE3NQEQ/closedform',
                            ),
                            47 => 
                            array (
                                'id' => 48,
                                'poster_id' => 75,
                            'title' => 'Digital Brand/Product Design (Mid-Level)',
                                'company_name' => 'Studio Rodrigo',
                                'location' => 'Brooklyn, NY',
                                'job_type' => 'Freelance',
                                'description' => 'Studio Rodrigo (
www.studiorodrigo.com
) is a product strategy & design consultancy based in Brooklyn, NY.
We like working with inspiring companies to help design and launch products & services. Our clients include companies with global reach like Google, Airbnb, and Peacock and start-ups and smaller companies like This American Life, Uprise Art, Waymark Care, and Fora Travel.
We work across brand & digital product.
At Rodrigo, you\'ll work directly with our studio of experienced designers. To  get a sense of our work and what it’s like to work with us, check out:
https://www.studiorodrigo.com/
https://medium.com/@ritikdholakia/2025-rate-of-change-1cf08985d3e7
About the role:
- work on small teams (2-4 designers) driving product design, UX/UI, and brand projects for larger tech-centric companies and start-ups in a diverse range of industries
- work directly with clients to develop creative and product strategies
- own and manage your work and relationship with peers in the studio, clients, and tech partners',
                                'description_html' => '
<p>Studio Rodrigo (<a href="http://www.studiorodrigo.com">www.studiorodrigo.com</a>) is a product strategy &amp; design consultancy based in Brooklyn, NY. </p><p>We like working with inspiring companies to help design and launch products &amp; services. Our clients include companies with global reach like Google, Airbnb, and Peacock and start-ups and smaller companies like This American Life, Uprise Art, Waymark Care, and Fora Travel.</p><p></p><p>We work across brand &amp; digital product.</p><p></p><p>At Rodrigo, you\'ll work directly with our studio of experienced designers. To  get a sense of our work and what it’s like to work with us, check out:</p><p></p><p><a href="https://www.studiorodrigo.com/">https://www.studiorodrigo.com/</a></p><p><a href="https://medium.com/@ritikdholakia/2025-rate-of-change-1cf08985d3e7">https://medium.com/@ritikdholakia/2025-rate-of-change-1cf08985d3e7</a></p><p></p><p>About the role:</p><p>- work on small teams (2-4 designers) driving product design, UX/UI, and brand projects for larger tech-centric companies and start-ups in a diverse range of industries</p><p>- work directly with clients to develop creative and product strategies</p><p>- own and manage your work and relationship with peers in the studio, clients, and tech partners</p>
',
                                'apply_url' => 'https://www.studiorodrigo.com/contact',
                                'created_at' => '2026-05-21 22:16:19',
                                'updated_at' => '2026-05-21 22:16:19',
                                'company_logo' => 'https://cdn.dribbble.com/userupload/47651528/file/a85ed993ce5c65b3e7f4c5f92658bfb5.png?resize=24x24',
                                'website' => 'https://www.studiorodrigo.com/contact',
                            ),
                            48 => 
                            array (
                                'id' => 49,
                                'poster_id' => 87,
                            'title' => 'Illustrator and Designer (apparel)',
                                'company_name' => 'Sam and Colby',
                                'location' => 'United States',
                                'job_type' => 'Freelance',
                                'description' => 'Location:
US
Salary:
$6,000 per month
Time:
Part-time (~20 hours per week)
Overview
We’re looking for a designer with strong illustration skills. This role will support ongoing merch development, primarily apparel (hoodies, tees), with possible expansion into plushies, backpacks, accessories, and jewelry. The work will be highly collaborative with a small team and fast-paced, with a few rounds of back-and-forth iterations based on tone, vibe, and style references provided at the start of each project.
We are looking for someone to commit approximately 20 hours per week on a part-time basis, with a long-term goal of transitioning to a full-time role if successful.
Key Responsibilities
Produce original illustrations and designs based on provided creative direction and mood/visual references (see examples at the bottom).
Iterate quickly through 2 - 3 rounds of feedback for each design.
Adapt artwork to various formats and dimensions for merchandise production.
Maintain consistency with the brand aesthetic and the shared style inspiration.
Use Photoshop, Illustrator, or Procreate to generate, refine, and finalize artwork.
Ensure final files meet print-ready requirements.
Requirements
Strong illustration skills with a portfolio that clearly aligns with the design styles and inspirations we provide.
Proficiency in Adobe suite (photoshop, illustrator, etc)
Ability to interpret visual references and match/replicate the tone, mood, and style direction.
Fast iteration speed and comfort working in a collaborative, feedback-heavy environment.
Excellent taste and a strong eye for composition, color, and detail.
Understanding of visual trends among Gen Z and Gen Alpha, especially within the 16–22 y/o female demographic.
Ability to design across multiple merchandise categories (apparel, plush, accessories).',
                                    'description_html' => '
<p><strong>Location:</strong> US</p><p><strong>Salary:</strong> $6,000 per month</p><p><strong>Time:</strong> Part-time (~20 hours per week)</p><p><strong>Overview</strong></p><p>We’re looking for a designer with strong illustration skills. This role will support ongoing merch development, primarily apparel (hoodies, tees), with possible expansion into plushies, backpacks, accessories, and jewelry. The work will be highly collaborative with a small team and fast-paced, with a few rounds of back-and-forth iterations based on tone, vibe, and style references provided at the start of each project.</p><p></p><p>We are looking for someone to commit approximately 20 hours per week on a part-time basis, with a long-term goal of transitioning to a full-time role if successful.</p><p></p><p><strong>Key Responsibilities</strong></p><p></p><ul><li><p>Produce original illustrations and designs based on provided creative direction and mood/visual references (see examples at the bottom).</p></li><li><p>Iterate quickly through 2 - 3 rounds of feedback for each design.</p></li><li><p>Adapt artwork to various formats and dimensions for merchandise production.</p></li><li><p>Maintain consistency with the brand aesthetic and the shared style inspiration.</p></li><li><p>Use Photoshop, Illustrator, or Procreate to generate, refine, and finalize artwork.</p></li><li><p>Ensure final files meet print-ready requirements.</p></li></ul><p></p><p><strong>Requirements</strong></p><p></p><ul><li><p>Strong illustration skills with a portfolio that clearly aligns with the design styles and inspirations we provide.</p></li><li><p>Proficiency in Adobe suite (photoshop, illustrator, etc)</p></li><li><p>Ability to interpret visual references and match/replicate the tone, mood, and style direction.</p></li><li><p>Fast iteration speed and comfort working in a collaborative, feedback-heavy environment.</p></li><li><p>Excellent taste and a strong eye for composition, color, and detail.</p></li><li><p>Understanding of visual trends among Gen Z and Gen Alpha, especially within the 16–22 y/o female demographic.</p></li><li><p>Ability to design across multiple merchandise categories (apparel, plush, accessories).</p><p></p></li></ul>
',
                                    'apply_url' => 'https://app.dover.com/apply/Sam%20and%20Colby%20Enterprises/0b46ff44-03c2-4388-9abf-3e5c4cbcc803?rs=72688016',
                                    'created_at' => '2026-05-21 22:16:21',
                                    'updated_at' => '2026-05-21 22:16:21',
                                    'company_logo' => 'https://cdn.dribbble.com/userupload/47312931/file/23da8fed52f0bc627228c08a6aadf9b3.png?resize=24x24',
                                    'website' => 'https://app.dover.com/apply/Sam%20and%20Colby%20Enterprises/0b46ff44-03c2-4388-9abf-3e5c4cbcc803?rs=72688016',
                                ),
                                49 => 
                                array (
                                    'id' => 50,
                                    'poster_id' => 88,
                                    'title' => 'UI/UX Designer',
                                    'company_name' => 'eJam Inc',
                                    'location' => 'Colombia',
                                    'job_type' => 'Full-time',
                                    'description' => 'eJam is in search of a talented and detail-oriented User Interface & CRO Designer based in Latin America to elevate one of our e-commerce brand\'s digital presence. If you have a flair for creating compelling visuals and a knack for social media trends, we want you on our team!
Founded in 2017, eJam is a direct-to-consumer brand incubator; focused on creating products that people love. Today, we own and operate a portfolio of brands with products that put you first. We take a unique approach to each brand and every product, making sure that we are fulfilling a real need while helping to shift the status quo.
This is an excellent opportunity for a highly motivated individual, eager to excel in a fast-paced and growth-centric setting. We\'re looking for someone who understands graphic design best practices, is deadline-oriented, and detail-focused, and has thrived in a remote role.
Responsibilities
Understanding user needs and, in coordination with other team members, translating them into processes and systems which enrich outcomes to maximize revenue, average order value and lifetime value via customer interface process.
Drive research activities, derive insights, generate concepts, communicate those concepts visually, and work with developers and product managers to build and test them.
Design research (both generative and evaluative) at interaction design, product design, and information architecture.
Work with cross-functional teams of experts in design, technical architecture, software engineering, and data science. In addition to building useful and usable digital services, you will be helping teams improve their user-centered design practice, and helping teams without those practices get started.
Ensuring consistency and alignment with our brand\'s voice and aesthetics.
Utilize a range of editing and graphic software, and continuously explore new tools to elevate the quality of your work.
Stay updated with the latest design trends.
Analyze and report key metrics to make informed decisions and ensure alignment with performance KPIs
Analyze existing e-commerce product detail pages (PDPs) and advertorial-style layouts to identify UX, UI, and conversion optimization opportunities.
Design
conversion-focused PDP and advertorial creative
, including hero sections, supporting content blocks, and visual storytelling elements that drive user action.
Apply
conversion rate optimization (CRO) principles
to layout, hierarchy, messaging, and visual design decisions.
Translate product benefits, value propositions, and trust signals into clear, persuasive UI components.
Create high-quality visual designs that balance
brand consistency, usability, and performance goals
.
Clearly articulate and document
design rationale
, explaining how UX and visual decisions improve clarity, usability, and conversion.
Work within defined
creative, technical, and brand constraints
, including provided assets, formats, and guidelines.
Collaborate with stakeholders to iterate on designs based on feedback, performance insights, and testing outcomes.
Requirements:
UX/UI design experience, preferably for an e-commerce company.
Proficiency in Adobe Creative Suite (Adobe XD, Photoshop or Illustrator) and other relevant design tools like FIgma or WebFlow.
Experience working with Behavioural Data tools like Lucky Orange or HotJar
Basic understanding of HTML, CSS.
Portfolio showcasing your best design examples.
Exceptional attention to detail and a keen eye for aesthetics.
Ability to work in a fast-paced environment and manage multiple projects simultaneously.
Excellent communication skills in English, both written and verbal.
A proactive mindset with the ability to take initiative and bring new ideas to the table.
Demonstrated experience designing
e-commerce PDPs, advertorials, or conversion-focused landing pages
.
Strong understanding of
conversion rate optimization (CRO)
and how design impacts user behavior and performance metrics.
Ability to
analyze existing designs
and propose thoughtful UX/UI improvements grounded in usability and persuasion principles.
Experience creating
clear visual hierarchy, layout structure, and storytelling
for performance-driven digital experiences.
Proven ability to
explain and defend design decisions
with logical reasoning tied to user experience and business outcomes.
Comfort working within
defined constraints
, including brand guidelines, provided assets, and technical specifications.
Experience using
Figma and/or Adobe Creative Suite
to produce polished, production-ready designs.
Strong attention to detail, especially in spacing, typography, alignment, and consistency across UI components.
Benefits:
Learning & Self Development Budget
Bonus Program
Fully Remote Position',
                                    'description_html' => '
<p>eJam is in search of a talented and detail-oriented User Interface &amp; CRO Designer based in Latin America to elevate one of our e-commerce brand\'s digital presence. If you have a flair for creating compelling visuals and a knack for social media trends, we want you on our team!</p><p>Founded in 2017, eJam is a direct-to-consumer brand incubator; focused on creating products that people love. Today, we own and operate a portfolio of brands with products that put you first. We take a unique approach to each brand and every product, making sure that we are fulfilling a real need while helping to shift the status quo.</p><p>This is an excellent opportunity for a highly motivated individual, eager to excel in a fast-paced and growth-centric setting. We\'re looking for someone who understands graphic design best practices, is deadline-oriented, and detail-focused, and has thrived in a remote role.</p><p> </p><p><strong>Responsibilities</strong></p><ul><li><p>Understanding user needs and, in coordination with other team members, translating them into processes and systems which enrich outcomes to maximize revenue, average order value and lifetime value via customer interface process.</p><ul><li><p>Drive research activities, derive insights, generate concepts, communicate those concepts visually, and work with developers and product managers to build and test them. </p></li><li><p>Design research (both generative and evaluative) at interaction design, product design, and information architecture.</p></li><li><p>Work with cross-functional teams of experts in design, technical architecture, software engineering, and data science. In addition to building useful and usable digital services, you will be helping teams improve their user-centered design practice, and helping teams without those practices get started.</p></li><li><p>Ensuring consistency and alignment with our brand\'s voice and aesthetics.</p></li><li><p>Utilize a range of editing and graphic software, and continuously explore new tools to elevate the quality of your work.</p></li><li><p>Stay updated with the latest design trends.</p></li><li><p>Analyze and report key metrics to make informed decisions and ensure alignment with performance KPIs</p></li><li><p>Analyze existing e-commerce product detail pages (PDPs) and advertorial-style layouts to identify UX, UI, and conversion optimization opportunities.</p></li><li><p>Design <strong>conversion-focused PDP and advertorial creative</strong>, including hero sections, supporting content blocks, and visual storytelling elements that drive user action.</p></li><li><p>Apply <strong>conversion rate optimization (CRO) principles</strong> to layout, hierarchy, messaging, and visual design decisions.</p></li><li><p>Translate product benefits, value propositions, and trust signals into clear, persuasive UI components.</p></li><li><p>Create high-quality visual designs that balance <strong>brand consistency, usability, and performance goals</strong>.</p></li><li><p>Clearly articulate and document <strong>design rationale</strong>, explaining how UX and visual decisions improve clarity, usability, and conversion.</p></li><li><p>Work within defined <strong>creative, technical, and brand constraints</strong>, including provided assets, formats, and guidelines.</p></li><li><p>Collaborate with stakeholders to iterate on designs based on feedback, performance insights, and testing outcomes.</p></li></ul></li></ul><p>Requirements:</p><ul><li><p>UX/UI design experience, preferably for an e-commerce company.</p><ul><li><p>Proficiency in Adobe Creative Suite (Adobe XD, Photoshop or Illustrator) and other relevant design tools like FIgma or WebFlow.</p></li><li><p>Experience working with Behavioural Data tools like Lucky Orange or HotJar</p></li><li><p>Basic understanding of HTML, CSS.</p></li><li><p>Portfolio showcasing your best design examples.</p></li><li><p>Exceptional attention to detail and a keen eye for aesthetics.</p></li><li><p>Ability to work in a fast-paced environment and manage multiple projects simultaneously.</p></li><li><p>Excellent communication skills in English, both written and verbal.</p></li><li><p>A proactive mindset with the ability to take initiative and bring new ideas to the table.</p></li><li><p>Demonstrated experience designing <strong>e-commerce PDPs, advertorials, or conversion-focused landing pages</strong>.</p></li><li><p>Strong understanding of <strong>conversion rate optimization (CRO)</strong> and how design impacts user behavior and performance metrics.</p></li><li><p>Ability to <strong>analyze existing designs</strong> and propose thoughtful UX/UI improvements grounded in usability and persuasion principles.</p></li><li><p>Experience creating <strong>clear visual hierarchy, layout structure, and storytelling</strong> for performance-driven digital experiences.</p></li><li><p>Proven ability to <strong>explain and defend design decisions</strong> with logical reasoning tied to user experience and business outcomes.</p></li><li><p>Comfort working within <strong>defined constraints</strong>, including brand guidelines, provided assets, and technical specifications.</p></li><li><p>Experience using <strong>Figma and/or Adobe Creative Suite</strong> to produce polished, production-ready designs.</p></li><li><p>Strong attention to detail, especially in spacing, typography, alignment, and consistency across UI components.</p></li></ul></li></ul><p>Benefits:</p><ul><li><p>Learning &amp; Self Development Budget</p></li><li><p>Bonus Program</p></li><li><p>Fully Remote Position</p></li></ul>
',
                                    'apply_url' => 'https://apply.workable.com/ejam/?not_found=true',
                                    'created_at' => '2026-05-21 22:16:24',
                                    'updated_at' => '2026-05-21 22:16:24',
                                    'company_logo' => 'https://cdn.dribbble.com/userupload/46306190/file/6f1075d294a065c54018eb5362bd3474.png?resize=24x24',
                                    'website' => 'https://apply.workable.com/ejam/?not_found=true',
                                ),
                                50 => 
                                array (
                                    'id' => 51,
                                    'poster_id' => 66,
                                    'title' => 'Marketing Graphic Designer',
                                    'company_name' => 'Illini',
                                    'location' => 'Vernon Hills, IL',
                                    'job_type' => 'Full-time',
                                    'description' => 'Since 1949, Illini has partnered with promotional product distributors across the country to design and deliver distinctive products across corporate, education, healthcare, and retail markets. As a family-owned business, we’ve built our reputation on quality, reliability, and long-term relationships.
Our team develops, sources, prints, and assembles a wide range of tabletop & kitchenware, bar accessories, office & desktop items, pet & baby items, and seasonal promotions. With in-house printing, assembly capabilities, and a 100,000 sq. ft. warehouse, we operate as a hands-on, product-focused organization. We move quickly, collaborate closely across departments, and take pride in producing work that is practical, polished, and built to last.
Position Details
We are seeking a Marketing Production Designer to support product launches and ongoing marketing initiatives across print and digital channels. This is a hands-on design role within a collaborative team environment. The ideal candidate is confident executing structured production work while also contributing thoughtful design input that strengthens overall product presentation and brand consistency. This role operates in a product-driven, SKU-heavy environment where clarity, speed, and consistency matter just as much as creativity. This is an onsite position, with the opportunity to transition to a hybrid schedule (1–2 days per week remote) after successful onboarding and integration into workflow.
Pay Rate:
$28 - 32/hour
Responsibilities
Product Launch & Marketing Support
Design and layout brochures, sell sheets, catalog pages, and marketing collateral
Develop clean, sales-focused logo concepts and example imprints to demonstrate realistic product applications across industries
Build email graphics and digital assets within established templates
Prepare web-ready visuals and update digital imagery
Packaging & Compliance Support
Execute packaging layout updates
Implement required compliance verbiage changes accurately and efficiently
Maintain packaging templates and version control
Asset Maintenance & Platform Updates
Update product images, SKUs, color options, and templates across internal and external platforms
Upload and revise visual content on the company website
Maintain organized brand assets and shared image libraries
Collaboration & Workflow
Work closely with internal teams to execute launch timelines
Balance multiple deadlines in a SKU-driven environment
Apply strong design judgment while working within real-world product and production constraints
Manage projects independently once direction and priorities are established
Qualifications
4–8 years of professional graphic design experience (in-house preferred)
Strong proficiency in Adobe Illustrator, InDesign, and Photoshop
Demonstrated experience designing for product-based businesses
Strong layout, typography, and visual hierarchy skills
Comfort working within established brand standards and structured templates
Excellent file organization and attention to detail
Ability to manage multiple projects and deadlines independently
Portfolio must include examples of packaging, catalog layouts, sell sheets, logo/mockup work, or multi-asset product launches.
Preferred Experience
Experience in B2B, promotional products, retail, or distributor-driven industries
Familiarity with CMS platforms
Experience preparing print-ready files for vendors
EOE',
                                    'description_html' => '
<p>Since 1949, Illini has partnered with promotional product distributors across the country to design and deliver distinctive products across corporate, education, healthcare, and retail markets. As a family-owned business, we’ve built our reputation on quality, reliability, and long-term relationships.</p><p>Our team develops, sources, prints, and assembles a wide range of tabletop &amp; kitchenware, bar accessories, office &amp; desktop items, pet &amp; baby items, and seasonal promotions. With in-house printing, assembly capabilities, and a 100,000 sq. ft. warehouse, we operate as a hands-on, product-focused organization. We move quickly, collaborate closely across departments, and take pride in producing work that is practical, polished, and built to last.</p><p></p><p><strong>Position Details</strong></p><p>We are seeking a Marketing Production Designer to support product launches and ongoing marketing initiatives across print and digital channels. This is a hands-on design role within a collaborative team environment. The ideal candidate is confident executing structured production work while also contributing thoughtful design input that strengthens overall product presentation and brand consistency. This role operates in a product-driven, SKU-heavy environment where clarity, speed, and consistency matter just as much as creativity. This is an onsite position, with the opportunity to transition to a hybrid schedule (1–2 days per week remote) after successful onboarding and integration into workflow.</p><p><strong>Pay Rate: </strong>$28 - 32/hour</p><p><strong>Responsibilities</strong></p><p>Product Launch &amp; Marketing Support</p><ul><li><p>Design and layout brochures, sell sheets, catalog pages, and marketing collateral</p></li><li><p>Develop clean, sales-focused logo concepts and example imprints to demonstrate realistic product applications across industries</p></li><li><p>Build email graphics and digital assets within established templates</p></li><li><p>Prepare web-ready visuals and update digital imagery</p></li></ul><p>Packaging &amp; Compliance Support</p><ul><li><p>Execute packaging layout updates</p></li><li><p>Implement required compliance verbiage changes accurately and efficiently</p></li><li><p>Maintain packaging templates and version control</p></li></ul><p>Asset Maintenance &amp; Platform Updates</p><ul><li><p>Update product images, SKUs, color options, and templates across internal and external platforms</p></li><li><p>Upload and revise visual content on the company website</p></li><li><p>Maintain organized brand assets and shared image libraries</p></li></ul><p>Collaboration &amp; Workflow</p><ul><li><p>Work closely with internal teams to execute launch timelines</p></li><li><p>Balance multiple deadlines in a SKU-driven environment</p></li><li><p>Apply strong design judgment while working within real-world product and production constraints</p></li><li><p>Manage projects independently once direction and priorities are established</p><p></p></li></ul><p><strong>Qualifications</strong></p><ul><li><p>4–8 years of professional graphic design experience (in-house preferred)</p></li><li><p>Strong proficiency in Adobe Illustrator, InDesign, and Photoshop</p></li><li><p>Demonstrated experience designing for product-based businesses</p></li><li><p>Strong layout, typography, and visual hierarchy skills</p></li><li><p>Comfort working within established brand standards and structured templates</p></li><li><p>Excellent file organization and attention to detail</p></li><li><p>Ability to manage multiple projects and deadlines independently</p></li><li><p>Portfolio must include examples of packaging, catalog layouts, sell sheets, logo/mockup work, or multi-asset product launches.</p><p></p></li></ul><p><strong>Preferred Experience</strong></p><ul><li><p>Experience in B2B, promotional products, retail, or distributor-driven industries</p></li><li><p>Familiarity with CMS platforms</p></li><li><p>Experience preparing print-ready files for vendors</p></li></ul><p>EOE</p>
',
                                    'apply_url' => 'https://www.linkedin.com/jobs/website-graphic-designer-jobs?trk=expired_jd_redirect&position=1&pageNum=0',
                                    'created_at' => '2026-05-21 22:16:27',
                                    'updated_at' => '2026-05-21 22:16:27',
                                    'company_logo' => 'https://cdn.dribbble.com/userupload/47311311/file/6b8248cc9e3c76299b2be5e1783bf6dc.jpg?resize=24x24',
                                    'website' => 'https://www.linkedin.com/jobs/website-graphic-designer-jobs?trk=expired_jd_redirect&position=1&pageNum=0',
                                ),
                            ));
        
        
    }
}