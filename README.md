#OneSearch
Initial Purpose of the application was to facilitate users to search at one place for the desired audio or video. The application will link to the different API search and display results.

While learning APIs I found that the SoundCloud API was not available, YouTube was really hard to understand for me so I dropped the idea but kept the home page dedicated to that functionality.

To fulfill the requirements of my assignment I have created 2 pages with 3 APIs.

1. **COVID Update**: This page drives data from 2 APIs _(JS Files created by me: Covid19Api.js, youtTubeApi.js)_.

   - **YouTube** API is used with search features to get 5 relevant videos for COVID 19, those videos are the same as if we search COVID 19 in the YouTube search bar.
   - **COVID19** API is used to get a summary of the COVID19 situation in the world so it will display data for new cases and the total cases globally.

2. **Contact**: On this page, I have used Google Map API to set the location and display marker to my contact address _(JS FIle created by me: google_map_script.js)_.

**@Home page Sign in to the application with Google Authorization.**

##Known issues
##Third-party cookies and data blocked
When enabled, this privacy feature deactivates all cookies and storage within the iframe, which is required by Google to securely authenticate the user.

One solution is to request users who have disabled third-party data to create an exception for https://accounts.google.com by adding accounts.google.com to the allowed domains. In Chrome, this is done in chrome://settings/content/cookies.

If any of your users have this feature enabled (some companies enforce this setting for all their employees), another workaround is to implement server-side OAuth 2.0 flows.
