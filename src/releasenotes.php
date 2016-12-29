<?php

$releaseNotes = [
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
    ]
];