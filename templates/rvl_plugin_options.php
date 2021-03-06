                    <h3><a name="YouTubeOptions">YouTube Options</a></h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Option Name</th>
                                <th colspan="2">Default Setting</th>
                                <th>Shortcode Parameters</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Related Videos</td>
                                <td>
                                    <input name=rvl_options_field[disable_youtube_related_videos]
                                        id="rvl-youtube-realted-videos"
                                        type="checkbox" value="1"
                                        <?php if ($options['disable_youtube_related_videos']): ?>checked="checked"<?php endif ?> />
                                </td>
                                <td><label for="rvl-youtube-realted-videos">
                                    Disable related viedos at video&nbsp;end</label></td>
                                <td><code>rel</code>, <code>norel</code></td>
                                <td>
                                    YouTube typically displays thumbnails of videos it
                                    feels are related to what was just shown at the end
                                    of a video.  This option can modify this&nbsp;behavior.
                                </td>
                            </tr>
                            <tr>
                                <td>Autoplay</td>
                                <td>
                                    <input name="rvl_options_field[enable_youtube_autoplay]"
                                        id="rvl-youtube-autoplay"
                                        type="checkbox" value="1"
                                        <?php if ($options['enable_youtube_autoplay']): ?>checked="checked"<?php endif ?> />
                                </td>
                                <td><label for="rvl-youtube-autoplay">
                                    Automatically Start Videos On&nbsp;Load</label></td>
                                <td><code>autoplay</code>, <code>noautoplay</code></td>
                                <td>
                                    Automatically begin playback of a video as soon as
                                    the page it's on is&nbsp;loaded.
                                </td>
                            </tr>
                            <tr>
                                <td>Disable Show Info</td>
                                <td>
                                    <input name="rvl_options_field[disable_youtube_showinfo]"
                                        id="rvl-youtube-showinfo"
                                        type="checkbox" value="1"
                                        <?php if ($options['disable_youtube_showinfo']): ?>checked="checked"<?php endif ?> />
                                </td>
                                <td><label for="rvl-youtube-showinfo">
                                    Disable title and extra info before&nbsp;playback</label></td>
                                <td><code>showinfo</code>, <code>noshowinfo</code></td>
                                <td>
                                    Whether or not to allow the player to display information
                                    like the video title and uploader before the video starts playing.
                                    By default, the info is displayed.  <strong>NOTE</strong>: This option
                                    is slightly at odds with <code>modestbranding</code>.  If you disable
                                    showinfo, YouTube branding will be shown regardless of the
                                    modestbranding&nbsp;setting.
                                </td>
                            </tr>
                            <tr>
                                <td>Modest Branding</td>
                                <td>
                                    <input name="rvl_options_field[enable_modest_branding]"
                                        id="rvl-modest-branding"
                                        type="checkbox" value="1"
                                        <?php if ($options['enable_modest_branding']): ?>checked="checked"<?php endif ?> />
                                </td>
                                <td><label for="rvl-modest-branding">Enable Modest Branding</label></td>
                                <td><code>modestbranding</code>, <code>nomodestbranding</code></td>
                                <td>
                                    Prevent the YouTube logo from displaying in the control
                                    toolbar. A small YouTube text label will appear in the
                                    info bar if a user hovers their mouse over a
                                    paused&nbsp;video.
                                </td>
                            </tr>
                            <tr>
                                <td>Window Mode</td>
                                <td>
                                    <select name="rvl_options_field[youtube_wmode]"
                                        id="rvl-youtube-wmode">
                                        <option value="none" <?php if ('none' == $options['youtube_wmode']): ?>selected="selected"<?php endif ?>>None</option>
                                        <option value="transparent" <?php if ('transparent' == $options['youtube_wmode']): ?>selected="selected"<?php endif ?>>Transparent</option>
                                        <option value="opaque" <?php if ('opaque' == $options['youtube_wmode']): ?>selected="selected" <?php endif ?>>Opaque</option>
                                    </select>
                                </td>
                                <td><label for="rvl-youtube-wmode">
                                    Default Window Mode</label></td>
                                <td><code>wmode_none</code>, <code>wmode_transparent</code>, <code>wmode_opaque</code></td>
                                <td>
                                    Window Mode is traditionally a flash thing
                                    that affects whether or not the background of your
                                    movie is transparent, and also can affect whether
                                    or not hardware acceleration is used during
                                    playback. Oddly, with YouTube's iframe embeds
                                    (such as those used in this plugin), it can also
                                    affect z-index. Setting the wmode to "transparent"
                                    should fix this behavior, but your mileage
                                    may&nbsp;vary.
                                </td>
                            </tr>
                            <tr>
                                <td>Theme</td>
                                <td>
                                    <select name="rvl_options_field[youtube_theme]"
                                        id="rvl-youtube-theme">
                                        <option value="dark" <?php if ('dark' == $options['youtube_theme']): ?>selected="selected"<?php endif ?>>Dark</option>
                                        <option value="light" <?php if ('light' == $options['youtube_theme']): ?>selected="selected" <?php endif ?>>Light</option>
                                    </select>
                                </td>
                                <td><label for="rvl-youtube-theme">
                                    Default Theme</label></td>
                                <td><code>dark_theme</code>, <code>light_theme</code></td>
                                <td>
                                    Typically the default dark theme is used, but
                                    YouTube does offer a light variant that might be
                                    a better fit for your&nbsp;site.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="submit">
                        <input type="submit" class="button-primary" value="Save Settings" />
                        <input type="hidden" name="action" value="update" />
                    </p>
                    <h3><a name="YouTubeSyntax">YouTube Shortcode Syntax &amp; Options</a></h3>
                    <p>
                        Simply include the URL or video id inside a [responsive_youtube] shortcode, like this:
                        <code>[responsive_youtube soagYwfgfxc]</code>, <br />or this:
                        <code>[responsive_youtube https://www.youtube.com/watch?v=soagYwfgfxc]</code>. In the
                        table above, you'll notice the options in the "Shortcode Parameters" column.  These can
                        be added to the shortcode in order to override one of the defaults or set an option
                        on a one-off basis.  For example, should you choose to use the light theme instead of the
                        default dark theme on your about page which has a custom template the light theme would look
                        good with, you could use the following shortcode <code>[responsive_tube soagYwfgfxc light_theme]</code>.
                        Also, you can use more than one parameter at a time, so
                        <code>[responsive_tube soagYwfgfxc light_theme autoplay]</code> is also valid.
                    </p>
                    <h3 style="padding-top: 18px;"><a name="VimeoOptions">Vimeo Options</a></h3>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Option Name</th>
                                <th colspan="2">Default Setting</th>
                                <th>Shortcode Parameters</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Title Display</td>
                                <td>
                                    <input name=rvl_options_field[disable_vimeo_title_display]
                                        id="rvl-vimeo-title-display"
                                        type="checkbox" value="1"
                                        <?php if ($options['disable_vimeo_title_display']): ?>checked="checked"<?php endif ?> />
                                </td>
                                <td><label for="rvl-vimeo-title-display">Disable the display of the video&nbsp;title</label></td>
                                <td><code>title</code>, <code>notitle</code></td>
                                <td>
                                    The title of the video typically displays in a bar that stretches
                                    across the top of video when it's not playing back.
                                </td>
                            </tr>
                            <tr>
                                <td>Byline Display</td>
                                <td>
                                    <input name="rvl_options_field[disable_vimeo_byline_display]"
                                        id="rvl-vimeo-byline"
                                        type="checkbox" value="1"
                                        <?php if ($options['disable_vimeo_byline_display']): ?>checked="checked"<?php endif ?> />
                                </td>
                                <td><label for="rvl-vimeo-byline">Disable the display of the&nbsp;byline</label></td>
                                <td><code>byline</code>, <code>nobyline</code></td>
                                <td>
                                    Typically displayed underneath the video title.
                                </td>
                            </tr>
                            <tr>
                                <td>Portrait Display</td>
                                <td>
                                    <input name="rvl_options_field[disable_vimeo_portrait_display]"
                                        id="rvl-vimeo-portrait"
                                        type="checkbox" value="1"
                                        <?php if ($options['disable_vimeo_portrait_display']): ?>checked="checked"<?php endif ?> />
                                </td>
                                <td><label for="rvl-vimeo-portrait">Disable the display of the user&nbsp;portrait</label></td>
                                <td><code>portrait</code>, <code>noportrait</code></td>
                                <td>
                                    Typically displayed in the upper left corner of the video.
                                </td>
                            </tr>
                            <tr>
                                <td>Autoplay</td>
                                <td>
                                    <input name="rvl_options_field[enable_vimeo_autoplay]"
                                        id="rvl-vimeo-autoplay"
                                        type="checkbox" value="1"
                                        <?php if ($options['enable_vimeo_autoplay']): ?>checked="checked"<?php endif ?> />
                                </td>
                                <td><label for="rvl-vimeo-byline">
                                    Enable the autoplay of the&nbsp;video</label></td>
                                <td><code>autoplay</code>, <code>noautoplay</code></td>
                                <td>
                                    Be careful before enabling this by default on all videos.  It's likely better to do
                                    this one video at a&nbsp;time.
                                </td>
                            </tr>
                            <tr>
                                <td>Loop</td>
                                <td>
                                    <input name="rvl_options_field[enable_vimeo_loop]"
                                        id="rvl-vimeo-loop"
                                        type="checkbox" value="1"
                                        <?php if ($options['enable_vimeo_loop']): ?>checked="checked"<?php endif ?> />
                                </td>
                                <td><label for="rvl-vimeo-byline">
                                    Enable the looping of the&nbsp;video</label></td>
                                <td><code>loop</code>, <code>noloop</code></td>
                                <td>
                                    Be careful before enabling this by default on all videos.  It's likely better to do
                                    this one video at a&nbsp;time.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="submit">
                        <input type="submit" class="button-primary" value="Save Settings" />
                        <input type="hidden" name="action" value="update" />
                    </p>
                    <h3><a name="VimeoSyntax">Vimeo Shortcode Syntax &amp; Options</a></h3>
                    <p>
                        Similarly to the YouTube syntax, simply include the URL or
                        video id inside a [responsive_vimeo] shortcode, like this:
                        <br /><code>[responsive_vimeo 29506088]</code>, or this:
                        <code>[responsive_vimeo https://vimeo.com/29506088]</code>.
                        In the table above, you'll notice the options in the "Shortcode
                        Parameters" column.  These can be added to the shortcode in
                        order to override one of the defaults or set an option on
                        a one-off basis.  For example, should you choose to include
                        the title of a video after disabling it her in the defaults,
                        you could use the following shortcode <code>[responsive_vimeo 29506088 title]</code>.
                    </p>
                </form>

            </div>
            <div class="col-md-3">
                <nav class="rvl-admin">
                    <h4>Table of Contents</h4>
                    <ol>
                        <li><a href="#Introduction">Introduction</a></li>
                        <li><a href="#YouTubeOptions">YouTube Options</a></li>
                        <li><a href="#YouTubeSyntax">YouTube Shortcode Syntax</a></li>
                        <li><a href="#VimeoOptions">Vimeo Options</a></li>
                        <li><a href="#VimeoSyntax">Vimeo Shortcode Syntax</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
