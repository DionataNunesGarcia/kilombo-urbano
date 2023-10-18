<img alt="Drupal Logo" src="https://www.drupal.org/files/Wordmark_blue_RGB.png" height="60px">

This is a Drupal project configured for local development using DDEV. DDEV is a powerful tool for developers that simplifies the setup and management of local development environments for PHP projects, including Drupal.

## Prerequisites

Before you begin working on this project, make sure you have the following tools installed on your system:

- [DDEV](https://ddev.readthedocs.io/en/stable/#installation)
- [Docker](https://www.docker.com/)
- [Git](https://git-scm.com/)

## Environment Setup

1. Clone this repository to your local environment:

```bash
git clone git@github.com:DionataNunesGarcia/ocupacao.git
```
2. Navigate to the project directory:
```bash
cd ocupacao
```
3. Start the DDEV environment:
```bash
ddev start
```
4. Install Drupal:
```bash
ddev composer install
ddev drush site-install
```
5. Visit the site in your browser:
```bash
ddev launch
```
6. Add config sync files in `/ocupacao/web/sites/default/settings.ddev.php`:
```bash
// Set $settings['config_sync_directory'] if not set in settings.php.
if (empty($settings['config_sync_directory'])) {
  $dir = dirname(DRUPAL_ROOT);
  $settings['config_sync_directory'] = "{$dir}/config/default";
}
```

## Development

Now you are ready to start developing your Drupal project locally. You can edit files, add modules, themes, and make any necessary customizations.

### Useful DDEV Commands

Here are some useful DDEV commands to help with your development workflow:

- Start the DDEV environment: `ddev start`
- Stop the DDEV environment: `ddev stop`
- Restart the DDEV environment: `ddev restart`
- Access the DDEV environment terminal: `ddev ssh`
- Import a database into the DDEV environment: `ddev import-db`


## Authors

- [Dionata Garcia](https://github.com/DionataNunesGarcia)
- [William Ulguim](https://github.com/Ulguim)



[Drupal.org]: https://www.drupal.org
[Drupal community]: https://www.drupal.org/community
[GitLab repository]: https://git.drupalcode.org/project/drupal
[issue queue]: https://www.drupal.org/project/issues/drupal
[issue forks]: https://www.drupal.org/drupalorg/docs/gitlab-integration/issue-forks-merge-requests
[documentation]: https://www.drupal.org/documentation
[changelog]: https://www.drupal.org/list-changes/drupal
[modules]: https://www.drupal.org/project/project_module
[security advisories]: https://www.drupal.org/security
[security RSS]: https://www.drupal.org/security/rss.xml
[security team]: https://www.drupal.org/drupal-security-team
[service providers]: https://www.drupal.org/drupal-services
[support]: https://www.drupal.org/support
[trademark]: https://www.drupal.com/trademark
