<!-- PROJECT LOGO -->
<br />
<p align="center">
  <h3 align="center">Github README YouTube Stats</h3>

  <p align="center">
    Youtube stats badges for your Github profile README
    <br />
    <br />
    <a href="https://www.youtube.com/channel/UCipSxT7a3rn81vGLw9lqRkg?sub_confirmation=1"><img alt="youtube subscribers" title="Subscribe to my YouTube channel" src="https://freshidea.com/jonah/youtube-api/subscribers-badge.php?style=for-the-badge&logo=none"/></a> 
  <a href="https://www.youtube.com/channel/UCipSxT7a3rn81vGLw9lqRkg"><img alt="youtube views" title="YouTube views" src="https://freshidea.com/jonah/youtube-api/view-count-badge.php?style=for-the-badge&logo=none"/></a>
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

Color of the right side of the badge (css named color or hex digits)

> Default: `blue` for subscribers, `brightgreen` for views

| Parameter | Appearance |
| --- | --- |
| `?color=red` | <a href="https://www.youtube.com/channel/UCipSxT7a3rn81vGLw9lqRkg?sub_confirmation=1"><img alt="youtube subscribers" title="Subscribe to my YouTube channel" src="https://freshidea.com/jonah/youtube-api/subscribers-badge.php?color=red"/></a> |
| `?color=0a8b9d` | <a href="https://www.youtube.com/channel/UCipSxT7a3rn81vGLw9lqRkg?sub_confirmation=1"><img alt="youtube subscribers" title="Subscribe to my YouTube channel" src="https://freshidea.com/jonah/youtube-api/view-count-badge.php?color=0a8b9d"/></a> |

### logo

Company logo supported by [shields.io](https://shields.io/#styles)

> Default: `youtube`

| Parameter | Appearance |
| --- | --- |
| `?logo=none` | <a href="https://www.youtube.com/channel/UCipSxT7a3rn81vGLw9lqRkg?sub_confirmation=1"><img alt="youtube subscribers" title="Subscribe to my YouTube channel" src="https://freshidea.com/jonah/youtube-api/subscribers-badge.php?logo=none"/></a> |
| `?logo=plex` | <a href="https://www.youtube.com/channel/UCipSxT7a3rn81vGLw9lqRkg?sub_confirmation=1"><img alt="youtube subscribers" title="Subscribe to my YouTube channel" src="https://freshidea.com/jonah/youtube-api/view-count-badge.php?logo=plex"/></a> |

### logoColor

Color of the logo

> Default: `white`

| Parameter | Appearance |
| --- | --- |
| `?logoColor=gold` | <a href="https://www.youtube.com/channel/UCipSxT7a3rn81vGLw9lqRkg?sub_confirmation=1"><img alt="youtube subscribers" title="Subscribe to my YouTube channel" src="https://freshidea.com/jonah/youtube-api/subscribers-badge.php?logoColor=gold"/></a> |
| `?logoColor=brightgreen` | <a href="https://www.youtube.com/channel/UCipSxT7a3rn81vGLw9lqRkg?sub_confirmation=1"><img alt="youtube subscribers" title="Subscribe to my YouTube channel" src="https://freshidea.com/jonah/youtube-api/view-count-badge.php?logoColor=brightgreen"/></a> |

### style

Style of the badge

> Default: `flat-square`

| Parameter | Appearance |
| --- | --- |
| `?style=plastic` | <a href="https://www.youtube.com/channel/UCipSxT7a3rn81vGLw9lqRkg?sub_confirmation=1"><img alt="youtube subscribers" title="Subscribe to my YouTube channel" src="https://freshidea.com/jonah/youtube-api/subscribers-badge.php?style=plastic"/></a> |
| `?style=flat` | <a href="https://www.youtube.com/channel/UCipSxT7a3rn81vGLw9lqRkg?sub_confirmation=1"><img alt="youtube subscribers" title="Subscribe to my YouTube channel" src="https://freshidea.com/jonah/youtube-api/subscribers-badge.php?style=flat"/></a> |
| `?style=flat-square` | <a href="https://www.youtube.com/channel/UCipSxT7a3rn81vGLw9lqRkg?sub_confirmation=1"><img alt="youtube subscribers" title="Subscribe to my YouTube channel" src="https://freshidea.com/jonah/youtube-api/subscribers-badge.php?style=flat-square"/></a> |
| `?style=for-the-badge` | <a href="https://www.youtube.com/channel/UCipSxT7a3rn81vGLw9lqRkg?sub_confirmation=1"><img alt="youtube subscribers" title="Subscribe to my YouTube channel" src="https://freshidea.com/jonah/youtube-api/subscribers-badge.php?style=for-the-badge"/></a> |
| `?style=social` | <a href="https://www.youtube.com/channel/UCipSxT7a3rn81vGLw9lqRkg?sub_confirmation=1"><img alt="youtube subscribers" title="Subscribe to my YouTube channel" src="https://freshidea.com/jonah/youtube-api/subscribers-badge.php?style=social"/></a> |

### label

Label for the badge

> Default: `Youtube subscribers` for subscribers, `YouTube view count` for views

| Parameter | Appearance |
| --- | --- |
| `?label=Subscribe` | <a href="https://www.youtube.com/channel/UCipSxT7a3rn81vGLw9lqRkg?sub_confirmation=1"><img alt="youtube subscribers" title="Subscribe to my YouTube channel" src="https://freshidea.com/jonah/youtube-api/subscribers-badge.php?label=Subscribe"/></a> |
| `?label=Views` | <a href="https://www.youtube.com/channel/UCipSxT7a3rn81vGLw9lqRkg?sub_confirmation=1"><img alt="youtube subscribers" title="Subscribe to my YouTube channel" src="https://freshidea.com/jonah/youtube-api/view-count-badge.php?label=Views"/></a> |

## Mixing styles

| Parameter | Appearance |
| --- | --- |
| `?style=social&logoColor=black&label=Subscribe` | <a href="https://www.youtube.com/channel/UCipSxT7a3rn81vGLw9lqRkg?sub_confirmation=1"><img alt="youtube subscribers" title="Subscribe to my YouTube channel" src="https://freshidea.com/jonah/youtube-api/subscribers-badge.php?style=social&logoColor=black&label=Subscribe"/></a> |
| `?label=Views&style=for-the-badge&color=3d3d3d` | <a href="https://www.youtube.com/channel/UCipSxT7a3rn81vGLw9lqRkg?sub_confirmation=1"><img alt="youtube subscribers" title="Subscribe to my YouTube channel" src="https://freshidea.com/jonah/youtube-api/view-count-badge.php?label=Views&style=for-the-badge&color=3d3d3d"/></a> |

See [shields.io](https://shields.io/#styles) for more info on parameters

### Support

♥ If you like this project, give it a ⭐ and share it with friends!
