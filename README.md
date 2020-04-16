#Known issues
##Third-party cookies and data blocked
When enabled, this privacy feature deactivates all cookies and storage within the iframe, which is required by Google to securely authenticate the user.

One solution is to request users who have disabled third-party data to create an exception for https://accounts.google.com by adding accounts.google.com to the allowed domains. In Chrome, this is done in chrome://settings/content/cookies.

If many of your users have this feature enabled (some companies enforce this setting for all their employees), another workaround is to implement server-side OAuth 2.0 flows.
