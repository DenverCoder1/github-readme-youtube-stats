<p align="center">
  <img src="https://i.imgur.com/0QRyKo9.png" width="100px"/>
  <h3 align="center">Github README YouTube Stats</h3>

  <p align="center">
    Youtube stats badges for your Github profile README
    <br />
    <br />
    <a href="https://www.youtube.com/channel/UCipSxT7a3rn81vGLw9lqRkg?sub_confirmation=1"><img alt="youtube subscribers" title="Subscribe to my YouTube channel" src="https://freshidea.com/jonah/youtube-api/subscribers-badge.php?style=for-the-badge#"/></a> 
  <a href="https://www.youtube.com/channel/UCipSxT7a3rn81vGLw9lqRkg"><img alt="youtube views" title="YouTube views" src="https://freshidea.com/jonah/youtube-api/view-count-badge.php?style=for-the-badge#"/></a>
  </p>
</p>

## Table of Contents

* [Subscribers badge](#subscribers-badge)
* [View count badge](#view-count-badge)
* [Additional parameters](#additional-parameters)
* [Mixing styles](#mixing-styles)
* [How to get a Youtube API key](#how-to-get-a-youtube-api-key)
* [How to find your YouTube channel ID](#how-to-find-your-youtube-channel-id)
* [Deploying it on your own](#deploying-it-on-your-own)
* [Contact me](#contact-me)
* [Support](#support)

## Subscribers badge

<a href="https://www.youtube.com/channel/UCipSxT7a3rn81vGLw9lqRkg?sub_confirmation=1"><img alt="youtube subscribers" title="Subscribe to my YouTube channel" src="https://freshidea.com/jonah/youtube-api/subscribers-badge.php#"/></a>

<b>Quick set up:</b>

Use this URL to get the number of subscribers for your channel as shown above

`https://github-readme-youtube-stats.herokuapp.com/subscribers/index.php?id=[YOUR CHANNEL ID]&key=[YOUR API KEY]`

Markup for creating the badge as a link to your YouTube channel

    <a href="https://www.youtube.com/channel/[YOUR CHANNEL ID]">
     <img alt="youtube subscribers" src="https://github-readme-youtube-stats.herokuapp.com/subscribers/index.php?id=[YOUR CHANNEL ID]&key=[YOUR API KEY]"/>
    </a>
    
See below for info on how to get a YouTube API key and your channel's ID.

## View count badge

<a href="https://www.youtube.com/channel/UCipSxT7a3rn81vGLw9lqRkg"><img alt="youtube views" title="YouTube views" src="https://freshidea.com/jonah/youtube-api/view-count-badge.php#"/></a>

<b>Quick set up:</b>

`https://github-readme-youtube-stats.herokuapp.com/views/index.php?id=[YOUR CHANNEL ID]&key=[YOUR API KEY]`

Markup for creating the badge as a link to your YouTube channel

    <a href="https://www.youtube.com/channel/[YOUR CHANNEL ID]">
     <img alt="youtube views" src="https://github-readme-youtube-stats.herokuapp.com/views/index.php?id=[YOUR CHANNEL ID]&key=[YOUR API KEY]"/>
    </a>
    
See below for info on how to get a YouTube API key and your channel's ID.
    
## Additional parameters

### color

Color of the right side of the badge (css named color or hex digits)

> Default: `blue` for subscribers, `brightgreen` for views

| Parameter | Appearance |
| --- | --- |
| `?color=red` | <a href="https://www.youtube.com/channel/UCipSxT7a3rn81vGLw9lqRkg?sub_confirmation=1"><img alt="youtube subscribers" title="Subscribe to my YouTube channel" src="https://freshidea.com/jonah/youtube-api/subscribers-badge.php?color=red#"/></a> |
| `?color=0a8b9d` | <a href="https://www.youtube.com/channel/UCipSxT7a3rn81vGLw9lqRkg?sub_confirmation=1"><img alt="youtube views" title="Subscribe to my YouTube channel" src="https://freshidea.com/jonah/youtube-api/view-count-badge.php?color=0a8b9d#"/></a> |

### logo

Company logo supported by [shields.io](https://shields.io/#styles)

> Default: `youtube`

| Parameter | Appearance |
| --- | --- |
| `?logo=none` | <a href="https://www.youtube.com/channel/UCipSxT7a3rn81vGLw9lqRkg?sub_confirmation=1"><img alt="youtube subscribers" title="Subscribe to my YouTube channel" src="https://freshidea.com/jonah/youtube-api/subscribers-badge.php?logo=none#"/></a> |
| `?logo=plex` | <a href="https://www.youtube.com/channel/UCipSxT7a3rn81vGLw9lqRkg?sub_confirmation=1"><img alt="youtube views" title="Subscribe to my YouTube channel" src="https://freshidea.com/jonah/youtube-api/view-count-badge.php?logo=plex#"/></a> |

### logoColor

Color of the logo

> Default: `white`

| Parameter | Appearance |
| --- | --- |
| `?logoColor=gold` | <a href="https://www.youtube.com/channel/UCipSxT7a3rn81vGLw9lqRkg?sub_confirmation=1"><img alt="youtube subscribers" title="Subscribe to my YouTube channel" src="https://freshidea.com/jonah/youtube-api/subscribers-badge.php?logoColor=gold#"/></a> |
| `?logoColor=brightgreen` | <a href="https://www.youtube.com/channel/UCipSxT7a3rn81vGLw9lqRkg?sub_confirmation=1"><img alt="youtube views" title="Subscribe to my YouTube channel" src="https://freshidea.com/jonah/youtube-api/view-count-badge.php?logoColor=brightgreen#"/></a> |

### style

Style of the badge

> Default: `flat-square`

| Parameter | Appearance |
| --- | --- |
| `?style=plastic` | <a href="https://www.youtube.com/channel/UCipSxT7a3rn81vGLw9lqRkg?sub_confirmation=1"><img alt="youtube subscribers" title="Subscribe to my YouTube channel" src="https://freshidea.com/jonah/youtube-api/subscribers-badge.php?style=plastic#"/></a> |
| `?style=flat` | <a href="https://www.youtube.com/channel/UCipSxT7a3rn81vGLw9lqRkg?sub_confirmation=1"><img alt="youtube subscribers" title="Subscribe to my YouTube channel" src="https://freshidea.com/jonah/youtube-api/subscribers-badge.php?style=flat#"/></a> |
| `?style=flat-square` | <a href="https://www.youtube.com/channel/UCipSxT7a3rn81vGLw9lqRkg?sub_confirmation=1"><img alt="youtube subscribers" title="Subscribe to my YouTube channel" src="https://freshidea.com/jonah/youtube-api/subscribers-badge.php?style=flat-square#"/></a> |
| `?style=for-the-badge` | <a href="https://www.youtube.com/channel/UCipSxT7a3rn81vGLw9lqRkg?sub_confirmation=1"><img alt="youtube subscribers" title="Subscribe to my YouTube channel" src="https://freshidea.com/jonah/youtube-api/subscribers-badge.php?style=for-the-badge#"/></a> |
| `?style=social` | <a href="https://www.youtube.com/channel/UCipSxT7a3rn81vGLw9lqRkg?sub_confirmation=1"><img alt="youtube subscribers" title="Subscribe to my YouTube channel" src="https://freshidea.com/jonah/youtube-api/subscribers-badge.php?style=social#"/></a> |

### label

Label for the badge

> Default: `Youtube subscribers` for subscribers, `YouTube view count` for views

| Parameter | Appearance |
| --- | --- |
| `?label=Subscribe` | <a href="https://www.youtube.com/channel/UCipSxT7a3rn81vGLw9lqRkg?sub_confirmation=1"><img alt="youtube subscribers" title="Subscribe to my YouTube channel" src="https://freshidea.com/jonah/youtube-api/subscribers-badge.php?label=Subscribe#"/></a> |
| `?label=View+count` | <a href="https://www.youtube.com/channel/UCipSxT7a3rn81vGLw9lqRkg?sub_confirmation=1"><img alt="youtube views" title="Subscribe to my YouTube channel" src="https://freshidea.com/jonah/youtube-api/view-count-badge.php?label=View+count#"/></a> |

### labelColor

Color for the left part of the badge

> Default: `gray`

| Parameter | Appearance |
| --- | --- |
| `?labelColor=magenta` | <a href="https://www.youtube.com/channel/UCipSxT7a3rn81vGLw9lqRkg?sub_confirmation=1"><img alt="youtube subscribers" title="Subscribe to my YouTube channel" src="https://freshidea.com/jonah/youtube-api/subscribers-badge.php?labelColor=magenta#"/></a> |
| `?labelColor=33ab06` | <a href="https://www.youtube.com/channel/UCipSxT7a3rn81vGLw9lqRkg?sub_confirmation=1"><img alt="youtube views" title="Subscribe to my YouTube channel" src="https://freshidea.com/jonah/youtube-api/view-count-badge.php?labelColor=33ab06#"/></a> |

## Mixing styles

| Parameter | Appearance |
| --- | --- |
| `?style=social&logoColor=black&label=Subscribe` | <a href="https://www.youtube.com/channel/UCipSxT7a3rn81vGLw9lqRkg?sub_confirmation=1"><img alt="youtube subscribers" title="Subscribe to my YouTube channel" src="https://freshidea.com/jonah/youtube-api/subscribers-badge.php?style=social&logoColor=black&label=Subscribe#"/></a> |
| `?label=View+count&style=for-the-badge&color=3d3d3d` | <a href="https://www.youtube.com/channel/UCipSxT7a3rn81vGLw9lqRkg?sub_confirmation=1"><img alt="youtube views" title="Subscribe to my YouTube channel" src="https://freshidea.com/jonah/youtube-api/view-count-badge.php?label=View+count&style=for-the-badge&color=3d3d3d#"/></a> |
| `?label=Views&style=for-the-badge&color=red&labelColor=ce4630` | <a href="https://www.youtube.com/channel/UCipSxT7a3rn81vGLw9lqRkg?sub_confirmation=1"><img alt="youtube views" title="Subscribe to my YouTube channel" src="https://freshidea.com/jonah/youtube-api/view-count-badge.php?label=Views&style=for-the-badge&color=red&labelColor=ce4630#"/></a> |

See [shields.io](https://shields.io/#styles) for more info on parameters

## How to get a Youtube API key

1. Go to https://console.developers.google.com/project and sign in
2. Click "Create Project"
3. Name your project and click "Create"
4. Click the "Google APIs" link in the top left corner and select your project
5. Click "Enable APIs and Services"
6. Search for "YouTube Data API"
7. Enable "YouTube Data API v3"
8. In the left panel select "Credentials"
9. Click "Create Credentials", then "API key"
10. Copy your API key

## How to find your YouTube channel ID

1. Make sure you are signed into your YouTube channel
2. Go to https://www.youtube.com/account_advanced
3. You will find your channel ID below your user ID
4. Click "Copy" to copy your channel ID

![channel_id](https://i.imgur.com/dqGiHQP.png)

### Finding a channel ID when not signed in

1. Go to the channel page for the user you want the ID of
2. Press Ctrl+U to open the source code of the page
3. Press Ctrl+F on the source code and search for `itemprop="channelId"`
4. In the `meta` tag, the content attribute will have the channel ID.

![method2](https://i.imgur.com/W6qX62U.png)

## Deploying it on your own

If you can, it is preferable to host the files on your own server.

Doing this can lead to better uptime and more control over customization (you can modify the code for your usage).

Also, deploying it on your own means you can place your API key directly into the PHP code so it will not be visible in the URL. This makes it so that your API key cannot get used by other people without your knowledge.

You can deploy the PHP files on any website server with PHP installed or as a Heroku app.

## Contact me

<p align="left">
  <a href="https://twitter.com/DenverCoder1"><img alt="Twitter" title="Twitter" src="https://img.shields.io/badge/-Twitter-1DA1F2?style=for-the-badge&logo=twitter&logoColor=white"/></a>
  <a href="https://www.reddit.com/user/denvercoder1/"><img alt="Reddit" title="Reddit" src="https://img.shields.io/badge/-Reddit-FF5700?style=for-the-badge&logo=reddit&logoColor=white"/></a>
</p>

## Support

💙 If you like this project, give it a ⭐ and share it with friends!

<p align="left">
  <a href="https://www.youtube.com/channel/UCipSxT7a3rn81vGLw9lqRkg?sub_confirmation=1"><img alt="Youtube" title="Youtube" src="https://img.shields.io/badge/-Subscribe-red?style=for-the-badge&logo=youtube&logoColor=white"/></a>
  <a href="https://www.patreon.com/jonahlawrence"><img alt="Patreon" title="Patreon" src="https://img.shields.io/badge/-Patreon-F96854?style=for-the-badge&logo=patreon&logoColor=white"/></a>
</p>

<a href="https://ko-fi.com/jlawrence">☕ Buy me a coffee</a>

## 

Made with ❤️ and PHP

<a href="https://heroku.com/"><img alt="Powered by Heroku" title="Powered by Heroku" src="https://img.shields.io/badge/-Powered%20by%20Heroku-6567a5?style=for-the-badge&logo=heroku&logoColor=white"/></a>
