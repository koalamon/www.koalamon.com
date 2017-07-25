<?php

$releaseNotes = [
    '2017-07-24' => [
        'date' => '2017-07-25',
        'name' => 'Version 2.2.0',
        'desc' => 'In this release we focused on two things: new checks and cleaning up. That means that there are two new checks everybody can use
                   and all the known bugs are fixed.',
        'features' => [
            [
                'type' => 'check',
                'feature' => 'Insecure Content',
                'desc' => "For security reasons all traffic between the user and a website must be encrytped. When an html document is tranfered via https
                           it is important that all included assets are also included via https. The "Insecure Content Check" helps to find non-https requests within an https site."
            ],
            [
                'type' => 'check',
                'feature' => 'RSS Validator',
                'desc' => "The RSS protocol is the de facto standard for web feeds. These feeds can, for example, allow a user to keep track of many different 
                           websites in a single news aggregator. The "RSS Validator Check" screens if a given rss feed is valid."

            ],
            [
                'type' => 'check',
                'feature' => 'Visit Component',
                'desc' => "It is now possible to jump directly to the url of a given component from status overview.",
            ],
            [
                'type' => 'check',
                'feature' => 'Form Validation',
                'desc' => "We found out that when entering a new check configuration and accidentally add a space in front of the actual text 
                           it is impossible to find that mistake later on. Since 2.2.0 we provide a form validation that checks for such mistakes 
                           on all major forms.",
            ],
            [
                'type' => 'check',
                'feature' => 'SiteInfo Fallback',
                'desc' => "When we try to check the file size for the siteinfo tool and cannot connect to the given component we hand over the 
                           request to another datacenter to check if the problem is with us or the system is under test.",
            ],
            [
                'type' => 'check',
                'feature' => 'SiteInfo Gzip',
                'desc' => "In the past the SiteInfo tool had a problem with compressed http requests. That means that we always returned the uncompressed 
                           size of an asset. From now on we take the compressed size because that is the actual number that counts for data transfer.",
            ],
        ]
    ],
    '2017-06-12' => [
        'date' => '2017-06-13',
        'name' => 'Version 2.1.0 - Fortune',
        'desc' => 'Version 2.1.0 started as a stabilisation release. Minor bug fixes and small infrastructural improvements. Though with new customers
                   there come new ideas, so we decided to also implement some new features.',
        'features' =>
            [
                [
                    'type' => 'feature',
                    'feature' => 'Uptime Monitoring',
                    'desc' => "Each user can define a main component per system. When Leankoala can't reach that component the system is considered 
                               as down. We provide statistics and uptime reports where each user can see its systems health.",
                    'images' => ['2.1.0/uptime.png', '2.1.0/uptime_admin.png']
                ],
                [
                    'type' => 'feature',
                    'feature' => 'CSV Export',
                    'desc' => 'We provide a lot of statistics like uptime monitoring, system health, error rate and mean time to recover. But sometimes
                               a customer wants to do its own evaluation. This is why we implemented the csv export for all incidents of a given timespan.'
                ],
                [
                    'type' => 'feature',
                    'feature' => 'Resources Counter',
                    'desc' => 'With http/2 the number of resources every page impression generates is not that important anymore. But as most of the
                               websites do not support the new protocol yet we introduced the "Resources Counter" check that alerts when a given threshold
                               of loaded recources gets exceeded.'
                ],
                [
                    'type' => 'feature',
                    'feature' => 'KoalaPing - HTTP Header',
                    'desc' => 'When we find an anomaly it is important for us to collect all possible informations about the incident. That is why
                               we are now additionaly providing all the header information of the belonging request.'
                ],
                [
                    'type' => 'feature',
                    'feature' => 'Google Charts',
                    'desc' => "It's not just a visual improvement but also usability thing. We changed our graph rendering framework from graphite to 
                               <a href=\"https://developers.google.com/chart/\">google charts</a>.",
                    'images' => ['2.1.0/ggraph.png']
                ],
                [
                    'type' => 'feature',
                    'feature' => 'Fallback (MissingRequest2)',
                    'desc' => 'For more reliable checks we implemented the fallback mode for missing request. That means that every time we cannot request the
                               given component we retry from another datacenter.'
                ],
                [
                    'type' => 'feature',
                    'feature' => 'Recipes / Collections',
                    'desc' => 'With this release a lot of new recipes come along including google amp analytics, html basics, html header, facebook and twitter.'
                ],
                [
                    'type' => 'feature',
                    'feature' => 'Error Rate',
                    'desc' => 'When we introduced the uptime monitoring feature we also introduced the error time stats. It is possible to see error rates for 
                               every check for the last 7 days, month or year.'
                ]
            ]
    ],
    '2017-05-18' => [
        'date' => '2017-05-18',
        'name' => 'Version 2.0.0',
        'desc' => 'We are very proud to present our 2.0.0 release our next major release. With this version we introduced the javascript-aware 
                   feature for the Leankoala checks.',
        'features' =>
            [
                [
                    'type' => 'feature',
                    'feature' => 'Javascript-aware',
                    'desc' => '<p>The new javascript-aware feature changes a lot. We are now able to test and monitor websites that are 
                               based on javascript frameworks like <a href="https://facebook.github.io/react/">React</a> from Facebook 
                               or <a href="https://angularjs.org/">AngularJs</a> from Google.</p>
                               <p>From now on all our checks are able to handle the dom tree rendered by Chrome instead of the plain html file.
                               The only thing our customers have to do is to enable that feature within the system administration and all test 
                               runs are switched.</p>'
                ],
                [
                    'type' => 'feature',
                    'feature' => 'Enhanced Result Information',
                    'desc' => 'When trying to debug incidents found by Leankoala it is needed to provide a lot of information. We extended our
                               workers to collect more and more information. In this step we added the found requests and the html content from
                               MissingRequest.'
                ]
            ]
    ],
    '2017-04-17' => [
        'date' => '2017-04-17',
        'name' => 'Version 1.9.0 - Atlantis ',
        'desc' => 'The version 1.9.0 is build on feedback we got from an agency. It should help to better include Leankoala into the deployment process.',
        'features' =>
            [
                [
                    'type' => 'feature',
                    'feature' => 'Deployment Hooks',
                    'desc' => '<p>One standard use case for Leankoala is running all tests after a successful deployment. Leankoala now supports that 
                               workflow by providing two hooks. The first one is called before the deployment starts and tells Leankoala that within
                               the next minutes all errors found for a special system are a result of the deployment and should not be shown or alerted.</p>
                               <p>The second hook is used to re-activate Leankoala. When called the system will alert again. Additionally all tests 
                               for all components are started.</p>',
                    'images' => ['1.9.0/deployment_hook.png', '1.9.0/deployment_hook_2.png']
                ],
                [
                    'type' => 'feature',
                    'feature' => 'Main Menu Update',
                    'desc' => 'Our users told as that it is quite confusing that there are two systems and checks elements in our main menu. The one
                               for looking at the status and the other one for configuring those elements. We took that feedback and grouped all configure links
                               under one single configure menu item.'
                ]
            ]
    ],
    '2017-04-11' => [
        'date' => '2017-04-11',
        'name' => 'Version 1.8.0',
        'desc' => 'In version 1.8.0 we implemented one main feature we were already preparing by the last version. The check wizard. It helps to
                   create a good test coverage by just running the feature.',
        'features' =>
            [
                [
                    'type' => 'feature',
                    'feature' => 'Wizard',
                    'desc' => '<p>With version 1.7.0 we intruduced collections. An easy way to group test cases into a test suite. The new
                               wizard feature was build on top of that idea. The Leankoala team is now able to create a predefined and growing 
                               list of standard collections every user can use. This list grows on a daily basis.</p>
                               
                               <p>The current release 1.8.0 enables us to match those predefined collections automatically to your components. That 
                               means you only have to enter an url, click the wizard button and we tell you what components your website consists of.
                               This configuration should be the starting point for your test setup.</p>'
                ],
                [
                    'type' => 'feature',
                    'feature' => 'Recipes',
                    'desc' => 'We believe that modern web development means putting existing components together to create something new. That also means
                               we are able to know a lot about testing such a website without knowing details upfront. The first version of this feature already
                               includes 20 recipes and is growing fast. <a href="' . __a('/product/recipes.html', false) . '">Click here for more information.</a>'
                ],
                [
                    'type' => 'feature',
                    'feature' => 'System Type',
                    'desc' => 'We created Leankoala as a tool that can be used by all kind of professionals. Testers should be able to create their detailed 
                               test setups they are used to. But on the other hand product owners and website operators should be able to test as well. That
                               is why we introduced the system type. Every system is now connected to a type. Using that type we are able to suggest a set of
                               components we think that should be tested.'
                ],
                [
                    'type' => 'feature',
                    'feature' => 'Hasenfarm',
                    'desc' => 'The next hamburg start up is joining the Leankoala family. Hasenfarm an online shop for rabbit-related products is now tested
                               via Leankoala.'
                ]
            ]
    ],
    '2017-03-10' => [
        'date' => '2017-03-14',
        'name' => 'Version 1.7.0',
        'desc' => 'With version 1.7.0 we focused on two main topics: usability and reliability. The more user using Leankoala, the more we know about 
                   the needs. This release is again based on the feedback we got.',
        'features' =>
            [
                [
                    'type' => 'feature',
                    'feature' => 'Collections',
                    'desc' => 'Collections are a big step towards usability. A collection is a set of checks that can be defined on a global project
                               level and can afterwards be used be any single component. Collections can be used as part of KoalaPing, MissingRequest2, 
                               Http Header and XPath Checker.'
                ],
                [
                    'type' => 'feature',
                    'feature' => 'Attributes',
                    'desc' => 'In the past when an incident was opened in Leankoala the only information the user got was the failure message. In case
                               an incident could not be reproduced it was quite hard to use Leankoala to fix this issue. From now on all 22 tools
                               are able to store meta information on every test result. We call them attributes and they can be found on the incidents 
                               page (History). The first informations we are providing as attribute is the real html content we receive from the system.'
                ],
                [
                    'type' => 'feature',
                    'feature' => 'MissingRequest2',
                    'desc' => 'MissingRequest was the last of our 22 tools that came with an old fashioned interface. That is why we migrated the tool
                               to the Leankoala default layout, that makes it easier for the customer to create and edit checks.'
                ],
                [
                    'type' => 'feature',
                    'feature' => 'Smoke Fallback Server',
                    'desc' => 'With version 1.6.0 of Leankoala we introduced the fallback option for KoalaPing. We are happy to provide you this
                               solution for the most of our tools. That means that every time one of our test servers cannot execute a check it will redirect
                               it to the fallback server that is located in a different data center.'
                ],
                [
                    'type' => 'feature',
                    'feature' => 'Configure Checks',
                    'desc' => 'We got the feedback of our users that the configuration of their checks can be a little bit more usable. As we love
                               our customers we did usablity improvements here. When adding a new option for a check we point out that there are unsaved
                               changes. Additionally we store configuration of inactive systems.'
                ],
                [
                    'type' => 'feature',
                    'feature' => 'Recolution',
                    'desc' => 'We are very proud to announce a little success store. Recolution, a Hamburg start up, is now part of our start up program were 
                               we provide free accounts for ideas we believe in. For more information please read <a href="' . __a('/one-day-with/recolution.html', false) .
                        '" style="font-weigh: 800">one da with Recolution</a>.'
                ]
            ]
    ],
    '2017-02-17' => [
        'date' => '2017-02-14',
        'name' => 'Version 1.6.0',
        'desc' => 'Version 1.6.0  is our valentines gift for all our users. We focused on stability, added some minor features and fixed bugs.',
        'features' =>
            [
                [
                    'type' => 'feature',
                    'feature' => 'MissingRequest Relation',
                    'desc' => 'Sometimes you cannot be sure how often a request is called. That is why we introduced the possibility to tell MissingRequest
                               that a request is expected at least, less than or exactly n-times.'
                ],
                [
                    'type' => 'feature',
                    'feature' => 'Fallback Server',
                    'desc' => 'Every infrastructure sometimes has problems. Even ours. So we decided to create a fallback system. That means when we cannot
                               ping a customers system we first try it from another data center and hoster. Ony if that fails as well we create an incident.'
                ],
                [
                    'type' => 'feature',
                    'feature' => 'Check Overview',
                    'desc' => 'Before v1.6 every customer was only able to see which systems are activated for a selected check. If somebody wanted to see 
                               which checks a configured for a given system it was not possible an easy way. Now there is a check overview page for every 
                               system, that can be found in the main menu.'
                ],
                [
                    'type' => 'feature',
                    'feature' => 'New Recipes',
                    'desc' => 'To make it even more easy to configure a system in Leankoala we added some new recipe. Our wizard now creates check configuration
                               for google page speed score, little seo and google mobile friendly checker.'
                ],
                [
                    'type' => 'feature',
                    'feature' => 'Clone System',
                    'desc' => 'When handling a lot of systems it can be very useful to take an existing sytem as a kind of master system. This system 
                               should have all mandatory checks und components added. When creating a new one it is possible to take this system as a 
                               kind of template. We call it cloning.'
                ]
            ]
    ],
    '2017-02-01' => [
        'date' => '2017-02-01',
        'name' => 'Version 1.5.0',
        'desc' => 'The new version 1.5.0 seems to be a small step for the user but we updated some very important infrastructural components. So 
                   this release is focused on technical stuff.',
        'features' =>
            [
                [
                    'type' => 'feature',
                    'feature' => 'Graphite',
                    'desc' => 'Some checks create measured values. Those values were originally stored inside a mysql database. As we already executed
                               40.000.000 checks that database got slow. So we switched to graphite to create statistics about the measured data.'
                ],
                [
                    'type' => 'feature',
                    'feature' => 'Handling of measured data',
                    'desc' => 'We are now able to collect data from every check we made. That could be the performance data or the page speed score. This 
                               is an important change as we are now able to analyze the test results using our graphite database and hopefully predict problem
                               before they occur.'
                ],
                [
                    'type' => 'feature',
                    'feature' => 'Stability for MobileFriendly Checker',
                    'desc' => 'The problem with Googles mobile friendly checker is that from time to time it produces false positives. This might happen in  
                               case the css files of the checked systems are not delivered fast enough. As we are not able to fix googles bugs we now
                               decided to alert a bad mobile friendly score only if it occurs twice in a row.'
                ],
                [
                    'type' => 'feature',
                    'feature' => 'Inherit subdomain',
                    'desc' => 'When creating a new component it is now possible to inherit the subdomain from the parent system. That helps moving one 
                               subdomain to another. This could be the case when relaunching a project and new.project.com gets www.project.com.'
                ],
                [
                    'type' => 'feature',
                    'feature' => 'Move system',
                    'desc' => 'Every project admin is now able to move a system to another project she or he is administrating. This helps moving systems 
                               to a new area of responsibility like development phase and maintenance mode. It is also possible to hand the system over to
                               the customer.'
                ]
            ]
    ],
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
        'name' => 'Version 1.3.0',
        'desc' => 'The version 1.3.0 is the last release before the go live. We are proud to provide most of the features our beta testers wished.
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
