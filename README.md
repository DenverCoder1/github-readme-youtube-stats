<!-- PROJECT LOGO -->
<br />
<p align="center">
  <h3 align="center">Github README YouTube Stats</h3>

  <p align="center">
    Youtube stats badges for your Github profile README
    <br />
    <br />
    <a href="https://www.youtube.com/channel/UCipSxT7a3rn81vGLw9lqRkg?sub_confirmation=1"><img alt="youtube subscribers" title="Subscribe to my YouTube channel" src="https://freshidea.com/jonah/youtube-api/subscribers-badge.php"/></a> 
  <a href="https://www.youtube.com/channel/UCipSxT7a3rn81vGLw9lqRkg"><img alt="youtube views" title="YouTube views" src="https://freshidea.com/jonah/youtube-api/view-count-badge.php"/></a>
  </p>
</p>

## Subscribers Badge

<a href="https://www.youtube.com/channel/UCipSxT7a3rn81vGLw9lqRkg?sub_confirmation=1"><img alt="youtube subscribers" title="Subscribe to my YouTube channel" src="https://freshidea.com/jonah/youtube-api/subscribers-badge.php"/></a>

<b>Quick set up:</b>

Use this URL to get the number of subscribers for your channel as shown above

`https://github-readme-youtube-stats.herokuapp.com/subscribers/index.php?id=[YOUR CHANNEL ID]&key=[YOUR API KEY]`

Markup for creating the badge as a link to your YouTube channel

    <a href="https://www.youtube.com/channel/[YOUR CHANNEL ID]">
     <img alt="youtube subscribers" src="https://github-readme-youtube-stats.herokuapp.com/subscribers/index.php?id=[YOUR CHANNEL ID]&key=[YOUR API KEY]"/>
    </a>

## View Count Badge

<a href="https://www.youtube.com/channel/UCipSxT7a3rn81vGLw9lqRkg"><img alt="youtube views" title="YouTube views" src="https://freshidea.com/jonah/youtube-api/view-count-badge.php"/></a>

<b>Quick set up:</b>

`https://github-readme-youtube-stats.herokuapp.com/views/index.php?id=[YOUR CHANNEL ID]&key=[YOUR API KEY]`

Markup for creating the badge as a link to your YouTube channel

    <a href="https://www.youtube.com/channel/[YOUR CHANNEL ID]">
     <img alt="youtube subscribers" src="https://github-readme-youtube-stats.herokuapp.com/views/index.php?id=[YOUR CHANNEL ID]&key=[YOUR API KEY]"/>
    </a>
    
## Additional parameters

### color

Color of the right side of the badge (Default: `blue` for subscribers, `brightgreen` for views)

`https://github-readme-youtube-stats.herokuapp.com/subscribers/index.php?color=red&id=[YOUR CHANNEL ID]&key=[YOUR API KEY]`

<a href="https://www.youtube.com/channel/UCipSxT7a3rn81vGLw9lqRkg?sub_confirmation=1"><img alt="youtube subscribers" title="Subscribe to my YouTube channel" src="https://freshidea.com/jonah/youtube-api/subscribers-badge.php?color=red"/></a>

`https://github-readme-youtube-stats.herokuapp.com/views/index.php?color=0a8b9d&id=[YOUR CHANNEL ID]&key=[YOUR API KEY]`

<a href="https://www.youtube.com/channel/UCipSxT7a3rn81vGLw9lqRkg?sub_confirmation=1"><img alt="youtube subscribers" title="Subscribe to my YouTube channel" src="https://freshidea.com/jonah/youtube-api/view-count-badge.php?color=0a8b9d"/></a>

### logo

Company logo supported by shields.io (Default: `youtube`)

### logoColor

Color of the logo (Default: `white`)

### style

Style of the badge (Default: `flat-square`)

### label

Label for the badge (Default: `Youtube subscribers` for subscribers, `YouTube view count` for views)
