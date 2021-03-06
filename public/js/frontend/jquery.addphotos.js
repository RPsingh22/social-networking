/*!
 * jQuery Upload File Plugin
 * version: 2.0.7
 * @requires jQuery v1.5 or later & form plugin
 * Copyright (c) 2013 Ravishanker Kusuma
 * http://hayageek.com/
 */
(function(b) {
	if (b.fn.ajaxForm == undefined) {
		b.getScript(PUBLIC_PATH+"/js/jquery.form.js");
	}
	var a = {};
	a.fileapi = b("<input type='file'/>").get(0).files !== undefined;
	a.formdata = window.FormData !== undefined;
	b.fn.uploadFile = function(p) {
		var o = b.extend({
			url : "",
			method : "POST",
			enctype : "multipart/form-data",
			formData : null,
			returnType : null,
			allowedTypes : "*",
			fileName : "file",
			formData : {},
			dynamicFormData : function() {
				return {}
			},
			maxFileSize : -1,
			multiple : true,
			dragDrop : true,
			autoSubmit : true,
			showCancel : true,
			showAbort : true,
			showDone : true,
			showError : true,
			showStatusAfterSuccess : true,
			showStatusAfterError : true,
			buttonCss : false,
			buttonClass : false,
			onSubmit : function(q, r) {
			},
			onSuccess : function(r, q, s) {
			},
			onError : function(s, q, r) {
			},
			uploadButtonClass : "ajax-file-upload"
		}, p);
		this.fileCounter = 1;
		var d = "ajax-file-upload-" + (new Date().getTime());
		this.formGroup = d;
		this.hide();
		this.errorLog = b("<div></div>");
		this.after(this.errorLog);
		this.responses = [];
		if (!a.formdata) {
			o.dragDrop = false
		}
		var j = this;
		var e = b('<label for="" >' + b(this).html() + "</label>");
		b(e).addClass(o.uploadButtonClass);
		(function h() {
			if (b.fn.ajaxForm) {
				if (o.dragDrop) {
					var q = b('<div class="ajax-upload-dragdrop"></div>');
					b(j).before(q);
					b(q).append(e);
					b(q).append(b(o.dragDropStr));
					f(j, o, q)
				} else {
					b(j).before(e)
				}
				n(j, d, o, e)
			} else {
				window.setTimeout(h, 10)
			}
		})();
		this.startUpload = function() {
			b("." + this.formGroup).each(function(r, q) {
				if (b(this).is("form")) {
					b(this).submit()
				}
			})
		};
		this.stopUpload = function() {
			b(".ajax-file-upload-red").each(function(r, q) {
				if (b(this).hasClass(j.formGroup)) {
					b(this).click()
				}
			})
		};
		this.getResponses = function() {
			return this.responses
		};
		function f(t, q, r) {
			r.on("dragenter", function(s) {
				s.stopPropagation();
				s.preventDefault();
				b(this).css("border", "2px solid #A5A5C7")
			});
			r.on("dragover", function(s) {
				s.stopPropagation();
				s.preventDefault()
			});
			r.on("drop", function(u) {
				b(this).css("border", "2px dotted #A5A5C7");
				u.preventDefault();
				t.errorLog.html("");
				var s = u.originalEvent.dataTransfer.files;
				i(q, t, s)
			});
			b(document).on("dragenter", function(s) {
				s.stopPropagation();
				s.preventDefault()
			});
			b(document).on("dragover", function(s) {
				s.stopPropagation();
				s.preventDefault();
				t.css("border", "2px dotted #A5A5C7")
			});
			b(document).on("drop", function(s) {
				s.stopPropagation();
				s.preventDefault();
				t.css("border", "2px dotted #A5A5C7")
			})
		}
		function g(q) {
			var s = "";
			var r = q / 1024;
			if (parseInt(r) > 1024) {
				var t = r / 1024;
				s = t.toFixed(2) + " MB"
			} else {
				s = r.toFixed(2) + " KB"
			}
			return s
		}
		function l(u) {
			var v = [];
			if (jQuery.type(u) == "string") {
				v = u.split("&")
			} else {
				v = b.param(u).split("&")
			}
			var r = v.length;
			var q = [];
			var t, s;
			for (t = 0; t < r; t++) {
				v[t] = v[t].replace(/\+/g, " ");
				s = v[t].split("=");
				q.push([ decodeURIComponent(s[0]), decodeURIComponent(s[1]) ])
			}
			return q
		}
		function i(D, y, q) {
			for ( var z = 0; z < q.length; z++) {
				if (!c(y, D, q[z].name)) {
					if (D.showError) {
						b(
								"<div><font color='red'><b>" + q[z].name
										+ "</b> can't be uploaded. Allowed extensions are "
										+ D.allowedTypes + "<br></div>")
								.appendTo(y.errorLog)
					}
					continue
				}
				if (D.maxFileSize != -1 && q[z].size > D.maxFileSize) {
					if (D.showError) {
						b(
								"<div><font color='red'><b>"
										+ q[z].name
										+ "</b> can't be uploaded. Max allowed size is: "
										+ g(D.maxFileSize) + "<br></div>")
								.appendTo(y.errorLog)
					}
					continue
				}
				var A = D;
				var t = new FormData();
				var x = D.fileName.replace("[]", "");
				t.append(x, q[z]);
				var v = D.formData;
				if (v) {
					var C = l(v);
					for ( var w = 0; w < C.length; w++) {
						if (C[w]) {
							t.append(C[w][0], C[w][1])
						}
					}
				}
				A.fileData = t;
				var B = new m(y);
				B.filename.html(y.fileCounter + "). " + q[z].name);
				var r = b("<form style='display:block; position:absolute;left: 150px;' class='"
						+ y.formGroup
						+ "' method='"
						+ D.method
						+ "' action='"
						+ D.url + "' enctype='" + D.enctype + "'></form>");
				r.appendTo("body");
				var u = [];
				u.push(q[z].name);
				k(r, A, B, u, y);
				y.fileCounter++
			}
		}
		function c(t, r, v) {
			var u = r.allowedTypes.toLowerCase().split(",");
			var q = v.split(".").pop().toLowerCase();
			if (r.allowedTypes != "*" && jQuery.inArray(q, u) < 0) {
				return false
			}
			return true
		}
		function n(x, w, t, q) {
			var y = "ajax-upload-id-" + (new Date().getTime());
			var v = b("<form method='" + t.method + "' action='" + t.url
					+ "' enctype='" + t.enctype + "'></form>");
			var r = "<input type='file' id='" + y + "' name='" + t.fileName
					+ "'/>";
			if (t.multiple) {
				if (t.fileName.indexOf("[]") != t.fileName.length - 2) {
					t.fileName += "[]"
				}
				r = "<input type='file' id='" + y + "' name='" + t.fileName
						+ "' multiple/>"
			}
			var u = b(r).appendTo(v);
			u.change(function() {
				x.errorLog.html("");
				var E = t.allowedTypes.toLowerCase().split(",");
				var A = [];
				if (this.files) {
					for (B = 0; B < this.files.length; B++) {
						A.push(this.files[B].name)
					}
				} else {
					var C = b(this).val();
					A.push(C);
					if (!c(x, t, C)) {
						if (t.showError) {
							b(
									"<font color='red'><b>" + C
											+ "</b> is not allowed. Allowed "
											+ t.allowedTypes + "<br>")
									.appendTo(x.errorLog)
						}
						return
					}
				}
				q.unbind("click");
				n(x, w, t, q);
				v.addClass(w);
				if (t.multiple && a.formdata) {
					v.removeClass(w);
					var D = this.files;
					i(t, x, D)
				} else {
					var z = "";
					for ( var B = 0; B < A.length; B++) {
						z += x.fileCounter + "). " + A[B] + "<br>";
						x.fileCounter++
					}
					var s = new m(x);
					s.filename.html(z);
					k(v, t, s, A, x)
				}
			});
			v.css({
				margin : 0,
				padding : 0,
				display : "block",
				position : "absolute",
				left : "-550px"
			});
			v.appendTo("body");
			if (navigator.appVersion.indexOf("MSIE ") != -1) {
				q.attr("for", y)
			} else {
				q.click(function() {
					u.click()
				})
			}
		}
		function m(q) {
			this.statusbar = b("<div class='ajax-file-upload-statusbar'></div>");
			this.filename = b("<div class='ajax-file-upload-filename'></div>")
					.appendTo(this.statusbar);
			this.progressDiv = b("<div class='ajax-file-upload-progress'>")
					.appendTo(this.statusbar).hide();
			this.progressbar = b("<div class='ajax-file-upload-bar'></div>")
					.appendTo(this.progressDiv);
			this.abort = b(
					"<div class='ajax-file-upload-red "
							+ q.formGroup
							+ "'>Abort</div><div class='uploading-msg'>Uploading...</div>")
					.appendTo(this.statusbar).hide();
			this.cancel = b("<div class='ajax-file-upload-red'>Cancel</div>")
					.appendTo(this.statusbar).hide();
			this.done = b(
					"<div class='ajax-file-upload-green'>Done</div><div class='uploading-msg'>Uploaded.</div>")
					.appendTo(this.statusbar).hide();
			q.errorLog.after(this.statusbar);
			return this
		}
		function k(w, v, q, t, x) {
			var u = null;
			var r = {
				cache : false,
				contentType : false,
				processData : false,
				forceSync : false,
				data : v.formData,
				formData : v.fileData,
				dataType : v.returnType,
				beforeSubmit : function(C, z, B) {
					var y = v.dynamicFormData();
					if (y) {
						var s = l(y);
						if (s) {
							for ( var A = 0; A < s.length; A++) {
								if (s[A]) {
									if (v.fileData != undefined) {
										B.formData.append(s[A][0], s[A][1])
									} else {
										B.data[s[A][0]] = s[A][1]
									}
								}
							}
						}
					}
					return true
				},
				beforeSend : function(y, s) {
					v.onSubmit.call(this, t, y);
					q.progressDiv.show();
					q.cancel.hide();
					q.done.hide();
					if (v.showAbort) {
						q.abort.show();
						q.abort.click(function() {
							y.abort()
						})
					}
					if (!a.formdata) {
						q.progressbar.width("5%")
					} else {
						q.progressbar.width("1%")
					}
				},
				uploadProgress : function(B, s, A, z) {
					var y = z + "%";
					if (z > 1) {
						q.progressbar.width(y)
					}
				},
				success : function(y, s, z) {
					x.responses.push(y);
					q.progressbar.width("100%");
					q.abort.hide();
					v.onSuccess.call(this, t, y, z);
					if (v.showStatusAfterSuccess) {
						if (v.showDone) {
							q.done.show();
							q.done.click(function() {
								q.statusbar.hide("slow");
								q.statusbar.remove()
							})
						} else {
							q.done.hide()
						}
					} else {
						q.statusbar.hide("slow");
						q.statusbar.remove()
					}
					w.remove()
				},
				error : function(z, s, y) {
					q.abort.hide();
					if (z.statusText == "abort") {
						q.statusbar.hide("slow")
					} else {
						v.onError.call(this, t, s, y);
						if (v.showStatusAfterError) {
							q.progressDiv.hide();
							q.statusbar.append("<font color='red'>" + 'Oops! error occurred for this image, please try again.'
									+ "</font>")
						} else {
							q.statusbar.hide();
							q.statusbar.remove()
						}
					}
					w.remove()
				}
			};
			if (v.autoSubmit) {
				w.ajaxSubmit(r)
			} else {
				if (v.showCancel) {
					q.cancel.show();
					q.cancel.click(function() {
						w.remove();
						q.statusbar.remove()
					})
				}
				w.ajaxForm(r)
			}
		}
		return this
	}
}(jQuery));