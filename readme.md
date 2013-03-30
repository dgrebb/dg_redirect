# Redirect

A simple redirect plugin for ExpressionEngine.

## Usage

This plugin can be wrapped around a URL or custom field with a URL to redirect a page.

Usage:

{exp:dg_redirect}
	{custom_field}
{/exp:dg_redirect}

or

{exp:dg_redirect}
	http://example.com
{/exp:dg_redirect}

This would redirect to a URL within custom_field or http://example.com