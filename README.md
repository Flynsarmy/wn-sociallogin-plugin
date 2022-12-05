# Social Login for Winter

The Social Login plugin for Winter CMS allows customers to register and log in to your site with their Facebook, Google, Twitter and other social media accounts. The login page is completely customisable and can theme seamlessly into any Winter site.

## Supports

* Twitter
* Facebook
* Google
* **Extensible!** Don't see one you want? Add it!

**New!** Backend login support. Check the 'Enabled on backend?' checkbox on a per-provider basis in Settings - Social Login.

## Have a feature suggestion? Found a bug or need support?

Please use the contact form [on my website](https://www.flynsarmy.com/contact/) and I'll get back to you as soon as possible. I usually respond within a few hours depending on timezone differences.

## Installation

This plugin relies on Winter.User, so make sure you have that installed.

Go to System - Updates and in the search field enter **Flynsarmy.SocialLogin**

### Via Composer

* Add repository to composer.json:

    ```json
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/Flynsarmy/wn-sociallogin-plugin"
        }
    ],
    ```

* Then run command in console:

    ```bash
    composer require --dev flynsarmy/wn-sociallogin-plugin "dev-master"
    ```

## Usage

* Fill in any required credentials in System - Social Login, making sure the `Enabled?` checkbox is ticked when you're done.
* Add `User - Account` and `Social Login` components to your login page
* Copy `/plugins/winter/user/components/account/signin.htm` to your themes *partials/account* folder
* Where you want your login links, add

```twig
{% for name, link in social_login_links %}
    <a href="{{ link }}">{{ name }}</a>
{% endfor %}
```

Remember that you can format it any way you like.

## Settings

Sometimes you'll want to decide which page to redirect to on login/error. For example perhaps you have a log in page before checkout in an ecommerce plugin and want to redirect to the cart on login. This can be done by appending the following query string values to your login links:

Query String Param | Default | Description
-------------------|---------|-------------
s | /      | Success page redirect URL (relative)
f | /login | Error page redirect URL (relative)

**Example usage:**

```twig
{% for name, link in social_login_links %}
    <a href="{{ link }}?s={{ 'home'|page }}&f={{ 'login'|page }}">{{ name }}</a>
{% endfor %}
```

### Events

Developers can change the way logins are handled through several events detailed below.

Event | Parameters | Description
------|------------|-------------
flynsarmy.sociallogin.handleBackendLogin | array $provider_details, array $user_details, User $user | Triggers before backend login. Return true to halt the login process
flynsarmy.sociallogin.handleLogin | array $provider_details, array $user_details, User $user | Triggers before frontend login. Return true to halt the login process
flynsarmy.sociallogin.registerUser | array $provider_details, array $user_details | Triggers before registering a new user for attaching to a social account. Optionally return a User object

### Other Notes

Twitter doesn't return an email address, so when logging in with Twitter, a new user account is created and associated with the Twitter account.

### Examples

To get your login page looking how mine is in the marketplace screenshot here's my `/themes/travu/partials/account/signin.htm`:

```twig
<form id="login" data-request="onSignin">
	<div class="form-group">
		<label for="userSigninEmail">Email</label>
		<input name="email" type="email" class="form-control" id="userSigninEmail" placeholder="Enter your email">
	</div>

	<div class="form-group">
		<label for="userSigninPassword">Password</label>
		<input name="password" type="password" class="form-control" id="userSigninPassword" placeholder="Enter your password">
	</div>

	<p align="right">
		or sign in with
		{% for name, link in social_login_links %}
			<a href="{{ link }}" class='login {{ name|lower }}'><i class="fa fa-2 fa-{{ name|lower }}"></i></a>
		{% endfor %}
	</p>

	<button type="submit" class="btn btn-default">Sign in</button>
</form>
```
