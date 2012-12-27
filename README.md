# Standard Child Themes

This is a public repository for the [8BIT](http://8bit.io) community to contribute, maintain, share, and improve child themes specifically for [Standard](http://standardtheme.com).

If you are interested in getting started with child theming, be sure to grab our [child theme starter kit](https://github.com/eightbit/standard-child-theme-kit).

## Child Theme Users

### How To Install

There are two ways to install WordPress themes: via the WordPress Dashboard (recommended) and via FTP. 

*Installing via the WordPress Dashboard is recommended because this process makes sure all the file and folder permissions are set correctly.*

#### Using the WordPress Dashboard

1. Download the [child themes](https://github.com/eightbit/standard-child-themes/zipball/master).
2. Unzip the ```standard-child-themes.zip``` archive (zip) on your computer.
3. Locate the child theme directory you would like to install within the ```standard-child-themes``` directory.
4. Rezip the child theme directory you want to install.
5. In the WordPress Dashboard, navigate to **Appearance > Themes**.
6. In the **Appearance > Themes** screen, click on the **Install Themes** tab.
7. In the **Install Themes** tab, click on the **Upload** link at the top of the screen.
8. On the **Upload** page, locate the child theme archive (zip) on your computer (created in Step #4) and click **Install Now**.
9. On the successful upload page, click **Activate**.
10. Navigate to **Appearance > Editor**.
11. At the top of the child theme's style.css, change the Standard imported styles from ```@import url( '../../standard/style.css' );``` to ```@import url( '../standard/style.css' );``` (essentially removing one set of "```../```"), so the child theme properly accesses Standard's base styles.

#### Using FTP

1. Download the [child themes](https://github.com/eightbit/standard-child-themes/zipball/master).
2. Unzip the ```standard-child-themes.zip``` archive (zip) on your computer.
3. Locate the child theme directory you would like to install within the ```standard-child-themes``` directory.
4. Connect to your server via FTP.
5. Upload the child theme directory you want to install to the ```/wp-content/themes/``` directory on your server.
6. In the WordPress Dashboard, navigate to the **Appearance > Themes** screen.
7. Locate the child theme you installed and click **Activate**.
8. Navigate to **Appearance > Editor**.
9. At the top of the child theme's style.css, change the Standard imported styles from ```@import url( '../../standard/style.css' );``` to ```@import url( '../standard/style.css' );``` (essentially removing one set of "```../```"), so the child theme properly accesses Standard's base styles.

## Child Theme Developers & Contributors

### Guidelines

In order for child themes to be accepted into this repository, they must adhere to the following guidelines.

1. Be fully localized.
2. Include a README file.
3. Include at least one screenshot.
4. Be compatible with Standard 3.
5. Properly access the parent Standard styles (see FAQ below).

### How To Develop And Contribute

#### The Short Version

1. Using your favorite GitHub client, fork this repository. 8BIT recommend and uses [Gitbox](http://sites.fastspring.com/oleganza/product/gitbox?coupon=GITBOX8BIT).
2. Place the `standard-child-themes` directory in your existing `wp-content/themes` directory.
3. Create a subdirectory in `standard-child-themes` for your child theme and begin developing it.
4. Commit your theme to your forked repository and create a pull request back to [Standard Child Themes](https://github.com/eightbit/standard-child-themes).
5. 8BIT will merge your pull request, once it is reviewed against the guidelines.

#### The Long Version

8BIT has published [a series of blog posts](http://8bit.io/contributing-the-standard-repositories/) specifically targeting new developers or new users of GitHub. 

To get started, be sure to read the [series](http://8bit.io/contributing-the-standard-repositories/) in its entirety.

## FAQ's

### Why does my child theme look bad, like it is missing some styles?

#### Users

This is because the child themes were developed in a subdirectory, that is, ```wp-content/themes/standard-child-themes```. The child theme's stylesheet needs to properly reference Standard.

Make sure that your child theme ```style.css``` contains this:

```@import url( '../standard/style.css' );```

Rather than this:

```@import url( '../../standard/style.css' );```

#### Developers & Contributors

This is because the child themes are located in a subdirectory, that is, ```wp-content/themes/standard-child-themes```. The child theme's stylesheet needs to properly reference Standard.

Make sure that your child theme```style.css``` contains this:

```@import url( '../../standard/style.css' );```

Rather than this:

```@import url( '../standard/style.css' );```

### When will my theme be merged into the repository?

As soon as we have time to merge the pull request and once it is reviewed against the guidelines.

### Are you guys responsible for vetting the quality of the theme?

No. This responsibility falls on the developer. We are simply providing a way for our community to openly and freely contribute to Standard.

Please contact the developer of the child theme if you have any questions or issues. Contact information should be within the child theme's style.css comments.

### What if my question was not answered here?

Shoot us an email at [info@8bit.io](mailto:info@8bit.io?subject=[Standard%20Child%20Themes%20Repository]%20I%20have%20a%20question!) or drop us a question on the [support forum](http://support.8bit.io/categories/20057941-github-repositories).