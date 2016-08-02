"use strict";

var tickthokk = {
	init:function() {
		tickthokk.setup();
		tickthokk.events();
	},
	setup:function() {
		tickthokk.actions.tooltips();
		tickthokk.actions.popovers();
	},
	events:function() {

	},
	actions: {
		tooltips:function() {
			$('[data-toggle="tooltip"]').tooltip({
				'html': true,
				'container': 'body'
			});
		},
		popovers:function() {
			$('[data-toggle="popover"]').popover({
				'container': 'body',
				'html': true
			});
		}
	}
}

$(tickthokk.init);