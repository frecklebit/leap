# Events

Orchestra utilise `Event` class from Laravel to extends the functionality, without having to modify any of the code. 
Listed below are all the possible events that can be used with Orchestra Platform.

* [General Events](/bundocs/orchestra/events/general)
	- orchestra.started
	- orchestra.started: backend
	- orchestra.started: view
	- orchestra.done
	- orchestra.done: backend
* [Installation Events](/bundocs/orchestra/events/install)
	- orchestra.install.schema
	- orchestra.install.schema: users
	- orchestra.install: user
	- orchestra.install: acl
* [Credential Events](/bundocs/orchestra/events/credential)
	- orchestra.auth: login
	- orchestra.auth: logout
* Extension Events
	- extension.started: {name}
	- extension.done: {name}
	- orchestra.form: extension.{name}
	- orchestra.saving: extension.{name}
	- orchestra.saved: extension.{name}
	- orchestra.publishing: extension
* Page Events
	- orchestra.pages: {name}.{action}
	- orchestra.manages: {name}.action}
* Manage User Events
	- orchestra.list: users
	- orchestra.form: users
	- orchestra.validate: users
	- orchestra.creating: users
	- orchestra.updating: users
	- orchestra.deleting: users
	- orchestra.saving: users
	- orchestra.created: users
	- orchestra.updated: users
	- orchestra.deleted: users
	- orchestra.saved: users
* User Account Events
	- orchestra.form: user.account
	- orchestra.validate: user.account
	- orchestra.creating: user.account
	- orchestra.updating: user.account
	- orchestra.deleting: user.account
	- orchestra.saving: user.account
	- orchestra.created: user.account
	- orchestra.updated: user.account
	- orchestra.deleted: user.account
	- orchestra.saved: user.account
* Setting Events
	- orchestra.form: settings
	- orchestra.validate: settings
	- orchestra.saved: settings
