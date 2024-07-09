<?php

use App\Enums\Pages;
use App\Enums\Status;

return [

    'faqs' => [
        [
            "question" => "What is Bezalel Frontiers?",
            "answer" => "Bezalel Frontiers is a data-driven and research-based management consulting firm that provides essential intelligence for organizations and their people for informed ideation, business, and management decisions."
        ],
        [
            "question" => "What services does Bezalel Frontiers offer?",
            "answer" => "We offer a range of services including Business Advisory and Management Consulting, Research, Ideation Workshops and Retreats, Strategy Retreats, Strategy Boot Camps, Training and Capacity Building, and Historical Archival Services."
        ],
        [
            "question" => "How can I contact Bezalel Frontiers?",
            "answer" => "You can contact us via phone, email, or visit our office. Our contact information is available on the Contact Us page."
        ],
        [
            "question" => "What is included in your Business Advisory and Management Consulting services?",
            "answer" => "Our services include data-driven and research-based management consulting and personalized business advisory services, aimed at enhancing business performance and strategic direction."
        ],
        [
            "question" => "How can your consulting services help my business?",
            "answer" => "Our consulting services provide actionable insights and tailored solutions to address your specific business challenges and opportunities, helping you make informed decisions and achieve your strategic goals."
        ],
        [
            "question" => "What types of research do you conduct?",
            "answer" => "We conduct various forms of research including market research, industry analysis, impact analysis, employee and stakeholder research, opinion polling, and surveys."
        ],
        [
            "question" => "How do your research services benefit my organization?",
            "answer" => "Our research services deliver in-depth insights and data that support strategic decision-making, identify market opportunities, and assess organizational impact, ultimately driving business growth and efficiency."
        ],
        [
            "question" => "What are Ideation Workshops and Retreats?",
            "answer" => "Our ideation workshops and retreats are designed to generate, develop, and evaluate innovative and viable ideas for existing businesses, new ventures, and markets. They inspire creativity and practical solutions."
        ],
        [
            "question" => "Who should attend these workshops and retreats?",
            "answer" => "Business leaders, entrepreneurs, and teams looking to foster innovation, explore new ideas, and develop practical solutions for business challenges should attend our workshops and retreats."
        ],
        [
            "question" => "What is a Strategy Retreat?",
            "answer" => "A strategy retreat is a facilitated session where business leaders come together to develop, refine, and implement their strategic plans, especially in navigating a Diverse, Volatile, Uncertain, Complex, Ambiguous, and Disruptive (D-VUCAD) world."
        ],
        [
            "question" => "What is the difference between a Strategy Retreat and a Strategy Boot Camp?",
            "answer" => "A Strategy Retreat is typically exclusive to a single organization, focusing on their specific strategic needs. A Strategy Boot Camp, on the other hand, involves multiple organizations participating in a general strategy retreat to share best practices and collaborate on strategic planning."
        ],
        [
            "question" => "What training programs do you offer?",
            "answer" => "We offer both general training and bespoke training and development programs designed to increase the capacity and competencies of management, employees, and other stakeholders."
        ],
        [
            "question" => "How are your training programs tailored to specific organizational needs?",
            "answer" => "We partner with organizations to understand their unique challenges and goals, then design and deliver customized training programs that address these specific needs and objectives."
        ],
        [
            "question" => "What are Historical Archival Services?",
            "answer" => "Our historical archival services involve curating and preserving the history of businesses through both online and physical archives, ensuring that their stories and legacies are documented and remembered."
        ],
        [
            "question" => "Why is it important to archive a business’s history?",
            "answer" => "Archiving a business’s history helps preserve its legacy, provides valuable insights for future decision-making, and maintains a record of its achievements and milestones for posterity."
        ],
        [
            "question" => "How can I stay updated with Bezalel Frontiers’ latest news and insights?",
            "answer" => "You can stay updated by following us on social media and subscribing to our newsletter. Links and subscription forms are available on our website."
        ],
        [
            "question" => "Do you work with clients outside Africa?",
            "answer" => "Yes, while we are based in Africa, we have worked with diverse firms from various regions and are open to collaborating with international clients."
        ],
        [
            "question" => "How can I get started with Bezalel Frontiers?",
            "answer" => "To get started, simply contact us through our website, email, or phone. We will arrange an initial consultation to understand your needs and discuss how we can assist you."
        ]
    ],

    'services' => [
        [
            'name' => "Business Advisory and Management Consulting",
            'slug' => 'business-advisory',
            'description' => 'We offer data-driven and research-based management consulting services. Our personalized business advisory services are designed to provide you with the strategic insights needed for informed decision-making and sustainable growth.',
            'content' => "<blockquote><!--block-->&nbsp;In the ever-evolving business landscape, making informed and strategic decisions is critical to success. At Bezalel Frontiers, our Business Advisory and Management Consulting services are designed to provide you with the actionable insights and expert guidance needed to navigate complexities and seize opportunities.&nbsp;</blockquote><h2><!--block-->Our Approach</h2><p><!--block-->&nbsp;Our approach is rooted in data-driven analysis and rigorous research. We believe that the most effective strategies are informed by accurate and comprehensive data. By leveraging our extensive experience and deep industry knowledge, we deliver customized solutions that address your unique challenges and objectives.&nbsp;</p><h3><!--block--><strong>Benefits of Our Services</strong></h3><ul><li><!--block--><strong>Informed Decision-Making</strong></li></ul><p><!--block-->Our data-driven approach ensures that your decisions are based on reliable and comprehensive insights, reducing risks and enhancing outcomes.</p><ul><li><!--block--><strong>Customized Solutions</strong></li></ul><p><!--block-->We understand that every organization is unique. Our solutions are tailored to meet your specific needs, challenges, and goals, providing maximum value.</p><ul><li><!--block--><strong>Sustainable Growth</strong></li></ul><p><!--block-->Our focus on long-term strategy and operational efficiency helps your organization achieve sustainable growth and competitive advantage.</p><ul><li><!--block--><strong>Expert Guidance</strong></li></ul><p><!--block-->With a team of experienced consultants and industry experts, we provide the knowledge and expertise needed to navigate complex business environments and drive success.</p><h3><!--block--><strong>Why Choose Bezalel Frontiers</strong></h3><p><!--block-->At Bezalel Frontiers, our mission is to empower your organization with the intelligence and strategies needed for success. Our commitment to integrity, knowledge, and excellence ensures that we deliver the highest quality consulting services. We are passionate about helping you explore new frontiers of value and growth, and we look forward to partnering with you on your journey to success.</p>",
            'image' => 'service/business-advisory.jpg',
            'status' => Status::ACTIVE,
            'featured' => true 
        ],
        [
            'name' => "Research",
            'slug' => 'research',
            'description' => 'Our research services encompass market research, industry analysis, impact analysis, employee and stakeholder research, opinion polling, and surveys. We provide the essential intelligence needed to understand your market and stakeholders thoroughly.',
            'content' => "<blockquote><!--block-->&nbsp;At Bezalel Frontiers, our Research Services are designed to provide you with the insights needed to understand your market, stakeholders, and the broader landscape in which you operate.&nbsp;</blockquote><h3><!--block--><strong>Our Approach</strong></h3><p><!--block-->Our approach to research is methodical and thorough. We leverage a range of qualitative and quantitative research methodologies to gather data that is both comprehensive and relevant. Our team of experienced researchers is adept at transforming raw data into meaningful insights that drive strategic decisions.</p><h3><!--block--><strong>Benefits of Our Services</strong></h3><ul><li><!--block--><strong>Informed Decision-Making</strong></li></ul><p><!--block-->Our research services provide the reliable data and insights needed for making well-informed decisions. This reduces uncertainty and supports strategic planning.</p><ul><li><!--block--><strong>Customized Insights</strong></li></ul><p><!--block-->We tailor our research to address your specific questions and challenges, ensuring that the insights we provide are directly relevant to your needs.</p><ul><li><!--block--><strong>Strategic Advantage</strong></li></ul><p><!--block-->By understanding your market, industry, and stakeholders better, you gain a strategic advantage that helps you navigate challenges and seize opportunities.</p><ul><li><!--block--><strong>Expert Analysis</strong></li></ul><p><!--block-->Our team of experienced researchers brings a wealth of knowledge and expertise to every project, ensuring that your research is thorough, accurate, and insightful.</p><h3><!--block-->&nbsp;Why Choose Bezalel Frontiers&nbsp;</h3><p><!--block-->&nbsp;We are committed to providing research services that empower your organization with the knowledge needed for success. Our dedication to integrity, knowledge, and excellence ensures that you receive the highest quality research and insights. We are passionate about helping you make informed decisions and achieve your strategic goals.&nbsp;</p>",
            'image' => 'service/research.jpg',
            'status' => Status::ACTIVE,
            'featured' => true 
        ],
        [
            'name' => "Ideation workshops and retreats",
            'slug' => 'ideation-workshop-retreats',
            'description' => 'We facilitate general and specialized workshops and retreats to generate, develop, and evaluate innovative ideas for existing businesses, new ventures, and markets. Our ideation sessions are designed to inspire and drive creativity.',
            'content' => "<blockquote>In an increasingly complex and competitive business environment, having a well-defined and adaptable strategy is essential. At Bezalel Frontiers, our Strategy Boot Camps are designed to provide businesses and non-profits with the tools and insights needed to develop robust strategies in a collaborative and dynamic setting.</blockquote><h3><strong>Our Approach</strong></h3><p>Our approach to strategy boot camps is interactive and hands-on. We bring together diverse organizations to participate in a shared strategy development experience. This collaborative environment fosters innovation and the exchange of ideas, providing participants with fresh perspectives and valuable insights.</p><h3><strong>Benefits of Our Services</strong></h3><ul><li><strong>Collaborative Learning</strong></li></ul><p>Our boot camps provide a collaborative learning environment where participants can gain insights from both our experts and their peers. This collective approach leads to more innovative and effective strategies.</p><ul><li><strong>Practical Application</strong></li></ul><p>We focus on practical application, ensuring that participants leave the boot camp with actionable strategies and tools that can be implemented immediately within their organizations.</p><ul><li><strong>Enhanced Strategic Thinking</strong></li></ul><p>Through our interactive sessions and expert facilitation, participants develop enhanced strategic thinking skills that are essential for navigating the complexities of today's business landscape.</p><ul><li><strong>Cost-Effective Solution</strong></li></ul><p>Our strategy boot camps offer a cost-effective solution for organizations looking to develop their strategic capabilities without the expense of a customized retreat. By participating in a shared environment, organizations can access high-quality training at a fraction of the cost.</p><h3><strong>Why Choose Bezalel Frontiers</strong></h3><p>At Bezalel Frontiers, we are committed to helping your organization thrive in a complex and dynamic environment. Our strategy boot camps provide a unique opportunity to develop strategic capabilities in a collaborative and cost-effective setting. Our dedication to integrity, knowledge, and excellence ensures that you receive the highest quality training and insights.</p><p>For more information on how our Strategy Boot Camps can benefit your organization, contact us today.</p>",
            'image' => 'service/ideation-workshop.jpg',
            'status' => Status::ACTIVE,
            'featured' => true 
        ],
        [
            'name' => "Strategy Retreats",
            'slug' => 'strategy-retreats',
            'description' => "In today's Diverse, Volatile, Uncertain, Complex, Ambiguous, and Disruptive (D-VUCAD) environment, having a viable business and competitive strategy is crucial. We help companies conduct their annual strategy retreats, facilitate strategy-making processes, and monitor implementation throughout the year.",
            'content' => "<blockquote>In an era defined by Diversity, Volatility, Uncertainty, Complexity, Ambiguity, and Disruption (D-VUCAD), having a well-defined and adaptable strategy is more crucial than ever. At Bezalel Frontiers, our Strategy Retreats are designed to help your organization develop and implement effective strategies that navigate these challenges and capitalize on opportunities.</blockquote><h3><strong>Our Approach</strong></h3><p>Our approach to strategy retreats is holistic and collaborative. We combine rigorous data analysis with expert facilitation to guide your leadership team through the strategy development process. Our retreats are tailored to your specific needs, ensuring that the outcomes are directly aligned with your organizational goals.</p><h3><strong>Benefits of Our Services</strong></h3><ul><li><strong>Focused Strategic Planning</strong></li></ul><p>Our strategy retreats provide a dedicated space for your leadership team to focus on strategic planning without the distractions of day-to-day operations. This concentrated effort leads to more thoughtful and comprehensive strategies.</p><ul><li><strong>Enhanced Collaboration</strong></li></ul><p>We facilitate open and constructive discussions among your team members, fostering collaboration and ensuring that all perspectives are considered in the strategy development process.</p><ul><li><strong>Actionable Insights</strong></li></ul><p>By leveraging data-driven analysis and expert facilitation, we provide you with actionable insights that inform your strategic decisions and help you navigate the complexities of the D-VUCAD world.</p><ul><li><strong>Sustainable Competitive Advantage</strong></li></ul><p>Our retreats are designed to help you develop strategies that provide a sustainable competitive advantage, positioning your organization for long-term success.</p><h3><strong>Why Choose Bezalel Frontiers</strong></h3><p>At Bezalel Frontiers, we are dedicated to helping your organization navigate the complexities of the modern business landscape. Our commitment to integrity, knowledge, and excellence ensures that we deliver the highest quality strategy retreats. We are passionate about empowering your leadership team with the tools and insights needed for strategic success.</p>",
            'image' => 'service/strategy-retreat.jpg',
            'status' => Status::ACTIVE,
            'featured' => true 
        ],
        [
            'name' => "Strategy Boot Camps",
            'slug' => 'strategy-bootcamps',
            'description' => "Our strategy boot camps are ideal for businesses and non-profits looking to participate in a general strategy retreat. These boot camps provide a collaborative environment for developing robust strategies alongside other organizations.",
            'content' => "<blockquote>In an ever-changing business environment, the ability to develop and execute a robust strategy is paramount. At Bezalel Frontiers, our Strategy Boot Camps are designed to equip businesses and non-profits with the strategic tools and insights needed to thrive. These boot camps provide a collaborative and dynamic setting for comprehensive strategy development.</blockquote><h3><strong>Our Approach</strong></h3><p>Our approach to strategy boot camps is both interactive and practical. We create a collaborative learning environment where participants from diverse organizations come together to share experiences, gain new perspectives, and develop effective strategies.</p><h3><strong>Benefits of Our Services</strong></h3><ul><li><strong>Collaborative Learning</strong></li></ul><p>Our boot camps foster a collaborative learning environment where participants benefit from the collective knowledge and experience of both our experts and their peers. This approach leads to more innovative and effective strategies.</p><ul><li><strong>Practical Application</strong></li></ul><p>We emphasize practical application, ensuring that participants leave the boot camp with actionable strategies and tools that can be immediately implemented within their organizations.</p><ul><li><strong>Enhanced Strategic Thinking</strong></li></ul><p>Through interactive sessions and expert facilitation, participants develop enhanced strategic thinking skills essential for navigating the complexities of today’s business landscape.</p><ul><li><strong>Cost-Effective Solution</strong></li></ul><p>Our strategy boot camps provide a cost-effective solution for organizations seeking to enhance their strategic capabilities. By participating in a shared environment, organizations can access high-quality training at a fraction of the cost of customized retreats.</p><p><br></p><h3><strong>Why Choose Bezalel Frontiers</strong></h3><p>At Bezalel Frontiers, we are dedicated to helping your organization succeed in a dynamic and complex environment. Our strategy boot camps provide a unique opportunity to develop strategic capabilities in a collaborative and cost-effective setting. Our commitment to integrity, knowledge, and excellence ensures that you receive the highest quality training and insights.</p><p>For more information on how our Strategy Boot Camps can benefit your organization, contact us today.</p>",
            'image' => 'service/strategy-bootcamps.jpg',
            'status' => Status::ACTIVE,
            'featured' => true 
        ],
        [
            'name' => "Training and Capacity Building",
            'slug' => 'training-capacity-building',
            'description' => "We design bespoke training and development programs in partnership with organizations to increase the capacity and competencies of management, employees, and other stakeholders. Our training services are tailored to meet the specific needs of your organization.",
            'content' => "<blockquote>Continuous learning and development are essential for maintaining a competitive edge. At Bezalel Frontiers, our Training and Capacity Building services are designed to enhance the competencies and capabilities of your management, employees, and other stakeholders. We partner with organizations to deliver bespoke training programs that drive performance and foster growth.</blockquote><h3><strong>Our Approach</strong></h3><p>Our approach to training and capacity building is tailored and comprehensive. We work closely with your organization to understand your specific needs and develop customized training solutions that address your unique challenges and goals. Our programs are designed to be engaging, practical, and results-oriented.</p><h3><strong>Benefits of Our Services</strong></h3><ul><li><strong>Enhanced Skills and Competencies</strong></li></ul><p>Our training programs are designed to enhance the skills and competencies of your workforce, ensuring they are well-equipped to meet the demands of their roles and drive organizational success.</p><ul><li><strong>Improved Performance</strong></li></ul><p>By investing in training and development, you can improve the overall performance of your organization. Our programs focus on practical skills and knowledge that can be directly applied to improve productivity and efficiency.</p><ul><li><strong>Increased Employee Engagement</strong></li></ul><p>Engaging training programs help to motivate and retain employees. By providing opportunities for growth and development, you can increase employee satisfaction and loyalty.</p><ul><li><strong>Strategic Alignment</strong></li></ul><p>Our training and capacity building services are aligned with your strategic objectives. This ensures that the skills and knowledge gained through our programs support your organization’s long-term goals.</p><h3><strong>Why Choose Bezalel Frontiers</strong></h3><p>We are committed to helping your organization build the capabilities needed for long-term success. Our tailored training and capacity building programs are designed to meet your specific needs and drive meaningful results. With a focus on integrity, knowledge, and excellence, we deliver the highest quality training services that empower your workforce and support your strategic goals.</p><p>For more information on how our Training and Capacity Building services can benefit your organization, contact us today.</p>",
            'image' => 'service/capacity-building.jpg',
            'status' => Status::ACTIVE,
            'featured' => true 
        ],
        [
            'name' => "Historical Archival Services",
            'slug' => 'historical-archival-services',
            'description' => 'We assist organizations in curating and archiving their history, both online and in physical archives. Our historical archival services ensure that your organizational legacy is preserved for future generations.',
            'content' => "<blockquote>Our Historical Archival Services ensure that your organization's significant achievements, milestones, and stories are meticulously documented and preserved. We provide both online and physical archiving solutions tailored to your unique needs.&nbsp; In the fast-paced business world, preserving the history and legacy of your organization is vital for future generations.&nbsp;</blockquote><h3><strong>Our Approach</strong></h3><p>Our approach to historical archiving is thorough and professional. We work closely with your organization to understand your history, values, and key milestones. Using this information, we create comprehensive archives that reflect your organization's journey and contributions. Our services ensure that your legacy is not only preserved but also easily accessible for future reference.</p><h3><strong>Benefits of Our Services</strong></h3><ul><li><strong>Preservation of Legacy</strong></li></ul><p>Our archival services ensure that your organization’s history is meticulously documented and preserved for future generations. This helps maintain your legacy and provides a valuable resource for historical reference.</p><ul><li><strong>Enhanced Accessibility</strong></li></ul><p>By digitizing your archives and organizing them effectively, we make it easy for you to access and share your historical records. This is particularly valuable for research, public relations, and heritage projects.</p><ul><li><strong>Security and Protection</strong></li></ul><p>We implement robust preservation strategies to protect your archives from physical degradation, loss, or damage. Our digital archiving solutions also ensure that your records are safe from data loss or cyber threats.</p><ul><li><strong>Professional Documentation</strong></li></ul><p>Our team of experts provides professional documentation services that capture the significant aspects of your organization’s history. This ensures that your archives are accurate, comprehensive, and reflective of your true legacy.</p><h3><strong>Why Choose Bezalel Frontiers</strong></h3><p>At Bezalel Frontiers, we are committed to helping your organization preserve its valuable history. Our comprehensive archival services are designed to meet your specific needs and ensure that your legacy is documented and accessible. With a focus on integrity, knowledge, and excellence, we deliver the highest quality archival solutions that protect and celebrate your organization's heritage.</p><p>For more information on how our Historical Archival Services can benefit your organization, contact us today.</p>",
            'image' => 'service/historical-archive.webp',
            'status' => Status::ACTIVE,
            'featured' => true 
        ],
    ],

    'pages' => [
        [
            'page' => Pages::HOME,
            'content' => [
                "title" => "Top management firm in Nigeria",
                "meta_tags" => "management,nigeria",
                "meta_description" => "Awesome Meta Description",
                "sections" => [
                    [
                        "type" => "about_section",
                        "data" => [
                            "main_image" => "01J2BAE6XMM2HWRX4MWD13FR0X.jpg",
                            "inner_image" => "01J2BAE6YSCK9BGJVXM6KQKS82.jpg",
                            "caption" => "Welcome to Bezalel Frontiers",
                            "title" => "Driving Decisions with Data, Shaping Success with **Integrity**",
                            "description" => "<p>At **<strong>Bezalel Frontiers**<\/strong>, we provide actionable insights that inform, inspire, and empower minds and organizations for success. Discover how our data-driven and research-based management consulting can transform your business.<\/p>",
                            "button_text" => "Learn More",
                            "button_link" => route('about')
                        ]
                    ],
                    [
                        "type" => "services_section",
                        "data" => [
                            "title" => "OUR SERVICES",
                            "caption" => "Comprehensive Solutions For Your Business Needs",
                            "button_text" => "View More Services",
                            "button_link" => route('services')
                        ]
                    ],
                    [
                        "type" => "specialties_section",
                        "data" => [
                            "title" => "We are fully equipped to serve your needs",
                            "caption" => "We provide Strategic Insights and deliver **Growth.**",
                            "description" => "<p>Since our inception, Bezalel Frontiers has been dedicated to delivering high-quality, research-driven insights that empower organizations to make informed decisions.<\/p><p>We data-driven and research-based with the goal of providing essential intelligence for organizations and their people for informed ideation, and business &amp; management decisions. Our commitment to integrity, knowledge, and excellence sets us apart in the consulting industry.<\/p>",
                            "button_text" => "Get in touch",
                            "button_link" => route('contact')
                        ]
                    ],
                    [
                        "type" => "cta_section",
                        "data" => [
                            "caption" => "READY TO TRANSFORM YOUR BUSINESS?",
                            "title" => "Take the first step towards innovative solutions and strategic growth.",
                            "button_text" => "Get in touch",
                            "button_link" => route('contact')
                        ]
                    ]
                ]
            ],
            'status' => Status::ACTIVE
        ],
        [
            'page' => Pages::ABOUT,
            'content' => [
                "title" => "About Us",
                "meta_tags" => "about, ",
                "meta_description" => "About us",
                "sections" => [
                    [
                        "type" => "mission_section",
                        "data" => [
                            "our_mission" => "Providing actionable insights that inform, inspire, and empower minds and organizations for success.",
                            "our_vision" => "...the preferred choice for research driven insights."
                        ]
                    ],
                    [
                        "type" => "about_section",
                        "data" => [
                            "main_image" => "01J2BN1DNARWYF17M0669RM7CK.jpg",
                            "inner_image" => "01J2BN1DQMZFED33XD7AFBSE0J.jpg",
                            "caption" => "We are Bezalel Frontiers",
                            "title" => "Your Data-Driven Path to **Success**.",
                            "description" => "<p>Bezalel Frontiers is a data driven and research-based management consulting firm. We provide essential intelligence for organizations and their people for informed ideation, and business &amp; management decisions.<\/p><p>Our team of experts is dedicated to providing the best consulting services tailored to your needs. With extensive experience and a commitment to our core values, we are here to help you navigate the complexities of the modern business landscape.<\/p>",
                            "corevalues" => ["Integrity", "Knowledge", "Excellence"],
                            "button_text" => "Our Services",
                            "button_link" => route('services'),
                            "status" => true
                        ]
                    ],
                    [
                        "type" => "manager_section",
                        "data" => [
                            "title" => "A Word From Our Managing Consultant",
                            "description" => "<p>Thank you and welcome to Bezalel Frontiers. At Bezalel Frontiers, we aim to partner with clients, and provide them with the intelligence and knowledge they need to make more effective decisions.<\/p><p>Our approach to management consulting is driven by data and research. We are passionate about integrity, knowledge, and excellence \u2013 our core values; and our top priority is to exceed your expectations.<\/p><p>Over the past few years, we are thrilled to have worked in different capacities with diverse firms from within Africa and beyond. We look forward to working with you to explore new frontiers of value and growth for you and your organization.<\/p>",
                            "name" => "Dr. Ebes Esho",
                            "position" => "MANAGEMENT CONSULTANT",
                            "status" => true
                        ]
                    ]
                ]
            ],
            'status' => Status::ACTIVE
        ]
    ]
];
