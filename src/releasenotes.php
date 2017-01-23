etyet<?php

$releaseNotes = [
    '2017-01-22' => [
        'date' => '2017-01-22',
        'name' => 'Version 1.4.0',
        'desc' => 'Version 1.4.0. takes Leankoala to a new level. We are proud to introduce the beta version of our session handling. Every large
                   system has now the possbility to login before running the checks.',
        'features' =>
            [
                [
                    'type' => 'feature',
                    'feature' => 'Session Handling',
                    'desc' => 'Every large system has the possibility to define login schemas. You can provide user credentials and a login page 
                               for your system. Before a check is run the Leankoala worker will login into the system. This feature is still beta.'
                ],
                [
                    'type' => 'feature',
                    'feature' => 'Next Steps',
                    'desc' => 'There is so much one can do with Leankoala. That is why we created the first steps wizard to help the user to create
                               the first checks and the alerting. But after that, there is still a lot one can do. So we decided to create the next
                               steps wizard. This wizard will show the user all the things he or she did not do with Leankoala yet. It can be found in 
                               the main menu behind the "help" element.'
                ],
                [
                    'type' => 'infrastructure',
                    'feature' => 'High availability ',
                    'desc' => 'Leankoala helps its users to create high availability websites. To ensure that our service fulfills the
                               same requirements we updated our infrastructure to be redundant and fail safe. '
                ],
                [
                    'type' => 'bug',
                    'feature' => 'Gravatar',
                    'desc' => 'As we want to guarantee the best user experience we had get rid of the gravatar implementation. This implementation 
                               was slowing things down. Don\'t worry our customers are still able to upload their own profile pictures within the 
                               profile page.'
                ],
                [
                    'type' => 'bug',
                    'feature' => 'LittleSEO',
                    'desc' => 'When using LittleSeo there were some false positives when analyzing the robots.txt file. This should not appear in 
                               anymore.'
                ],
            ]
    ],
    '2016-12-29' => [
        'date' => '2016-12-29',
        'name' => 'Version 1.3',
        'desc' => 'The version 1.3 is the last release before the go live. We are proud to provide most of the features our beta testers wished.
                   We focused again on usability and the number of checks we provide.',
        'features' =>
            [
                [
                    'type' => 'check',
                    'feature' => 'Mobile Friendly Check',
                    'desc' => 'We use the mobile friendly api from google to check if your system is optimized. As google is ranking those
                               optimized websites higher this gets more and more important.'
                ],
                [
                    'type' => 'check',
                    'feature' => 'Performance Check',
                    'desc' => 'We now are able to check the time to first byte. That means we measure the time the application takes to respond. 
                               We alert if the component responds slower than a given treshold. We also added a recipe that will help adding
                               that check whenever a new component is created'
                ],
                [
                    'type' => 'check',
                    'feature' => 'Text Present Check',
                    'desc' => 'We updated our regular expression checker and renamed it ro text present check. This is not because we got rid
                               of the regular expression feature but as a feedback from out beta testers we found out that users search most
                               of the time for normal strings. A real regular expression is not used that often. That is why we now provide 
                               a text check as default but if wanted one can use regular expressions.'
                ],
                [
                    'type' => 'enhancement',
                    'feature' => 'JavaScript Error Scanner meets PhantomJS',
                    'desc' => 'We are proud to process a lot of our checks with a real chrome browser. That makes us different to a lot of other 
                               companies providing similar functionality. Sometimes it can interesting to know how a component behaves within
                               other browsers. The first step for us was to add PhantomJS as additional browser. Others will follow.'
                ],
                [
                    'type' => 'enhancement',
                    'feature' => 'History Extension',
                    'desc' => 'With version 1.2.1 we introduced the continuous integration extension that helps to run all checks for a 
                               given system triggered by the deployment process. We now added a new feature that helps adding release informations
                               to the timeline (history page). This can be done via a simple api call and is described within the admin panel.'
                ],
                [
                    'type' => 'recipe',
                    'feature' => 'PageSpeed Score Recipe',
                    'desc' => 'We added a recipe that automatically adds a page speed check whenever a new component is added.'
                ],
                [
                    'type' => 'usability',
                    'feature' => 'Configure check',
                    'desc' => 'We found out that it is not always easy to find the right check for a given incident. That is why we added 
                               a direct connection between those two entities that can be found on every status page.'
                ],
                [
                    'type' => 'usability',
                    'feature' => 'Component Creation',
                    'desc' => 'When creating a new component it is needed to split the uri into subdomain, domain and path. As most users copy the
                               new uri from the browser, that string contains all parts. When copying that string to the path input field it was 
                               needed to remove the domain and schema from the pasted input. The path input field is now a little bit more
                               intelligent and will recognise a full qualified uri and remove the not needed part.'
                ],
                [
                    'type' => 'usability',
                    'feature' => 'XPath Validation',
                    'desc' => 'XPath queries can be very hard to create if it is not within ones daily routine. That is why we added an instant 
                               syntax check. If the given xpath expression is not valid the system will tell.'
                ],

            ]
    ],
    '2016-12-02' => [
        'date' => '2016-12-02',
        'name' => 'Version 1.2.1 - Codename Bea M.',
        'desc' => 'The version 1.2.1 is dedicated to Bea M. one of our beta testers. Bea gave us a lot of feedback about our usability and we hope 
                   with this release we addressed most of her points.',
        'features' =>
            [
                [
                    'type' => 'feature',
                    'feature' => 'Rerun all checks (frontend)',
                    'desc' => 'When visiting the system page linked in the main menu you will now see a button with the label “run all checks 
                               for this system”. When pressing that button leankoala will add all configured checks to the queue and we will 
                               process them. This comes very handy when releasing a new version of your application. As it can be very time 
                               consuming to run all checks we decided that it is only possible to press that button once every five minutes.'
                ],
                [
                    'type' => 'feature',
                    'feature' => 'Rerun all checks (api)',
                    'desc' => 'Many of our using already use an automated process for deploying their software. This is why we also introduced 
                               an endpoint for running all tests. This can for example been triggered via a continuous integration server like 
                               jenkins or bamboo. This new feature can be found within the admin space (Other -> Continuous Integration).'
                ],
                [
                    'type' => 'usability',
                    'feature' => 'Usability',
                    'desc' => 'Main focus of this release was usability. These are some questions we addressed: 
                               <ul>
                               <li>What’s the difference between a project and a system? - When creating a new project we added more information about what you are doing here. We also added a small example.</li>
                               <li>Whats the difference between tools and checks in the main menu?  - As we also found that a little bit confusing we just removed one of those elements. Every information that is needed can now be found underneath the check element.</li>
                               <li>What does little seo do? - Right, we forgot do add some information about this check. So we just added a little explanation.</li>
                               <li>What’s acknowledge, mark known issue and ignore issue? - When now clicking on the options for an open incident there is more information about every option you can choose.</li>
                               <li>Why do the apply and save buttons look like they are inactive? - Good question. Now they do not.</li>
                               </ul>'
                ],
            ]
    ]
];
