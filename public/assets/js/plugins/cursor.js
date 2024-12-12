const { tmpCursor: tmpCursor, tmpMagnetic: tmpMagnetic } = (() => {
    const t = "undefined" != typeof jQuery ? jQuery : void 0;
    class e {
        constructor(e) {
            (this.options = t.extend(!0, { container: "body", speed: 0.7, ease: "expo.out", visibleTimeout: 300, stickForce: 0, stickMagneticForce: 0.3 }, e)),
                (this.body = t(this.options.container)),
                (this.el = t('<div class="tmp-cursor"></div>')),
                (this.text = t('<div class="tmp-cursor-text"></div>')),
                (this.stickForce = this.options.stickForce),
                (this.pos = { x: 0, y: 0 }),
                (this.stick = !1),
                (this.visible = !1),
                this.init();
        }
        init() {
            this.el.append(this.text), this.body.append(this.el), this.bind(), this.move(-window.innerWidth, -window.innerHeight, 0);
        }
        bind() {
            const e = this;
            function i() {
                e.setStick(t(this));
            }
            function s() {
                e.removeStick();
            }
            this.body
                .on("mouseleave", function () {
                    e.hide();
                })
                .on("mouseenter", function () {
                    e.show();
                })
                .on("mousemove", function (t) {
                    (e.pos = { x: e.stick ? e.stick.x - (e.stick.x - t.clientX) * e.stickForce : t.clientX, y: e.stick ? e.stick.y - (e.stick.y - t.clientY) * e.stickForce : t.clientY }), e.update();
                })
                .on("mousedown", function () {
                    e.setState("active");
                })
                .on("mouseup", function () {
                    e.removeState("active");
                })
                .on("mouseenter", "a,input,textarea,button", function () {
                    e.setState("pointer");
                })
                .on("mouseleave", "a,input,textarea,button", function () {
                    e.removeState("pointer");
                })
                .on("mouseenter", "iframe", function () {
                    e.hide();
                })
                .on("mouseleave", "iframe", function () {
                    e.show();
                })
                .on("mouseenter", "[data-tmp-cursor]", function () {
                    this.getAttribute("data-tmp-cursor") ? e.setState(this.dataset.tmpCursor) : e.setState("default");
                })
                .on("mouseleave", "[data-tmp-cursor]", function () {
                    this.getAttribute("data-tmp-cursor") ? e.removeState(this.dataset.tmpCursor) : e.removeState("default");
                })
                .on("mouseenter", "[data-tmp-cursor-text]", function () {
                    e.setText(this.dataset.tmpCursorText);
                })
                .on("mouseleave", "[data-tmp-cursor-text]", function () {
                    e.removeText();
                })
                .on("mouseenter", "[data-tmp-cursor-icon]", function () {
                    e.setText(`<i class="${this.dataset.tmpCursorIcon}"></i>`);
                })
                .on("mouseleave", "[data-tmp-cursor-icon]", function () {
                    e.removeText();
                })
                .on("mouseenter", "[data-tmp-cursor-stick]", function () {
                    e.setStick(t(this).find(this.dataset.tmpCursorStick)), t(this).on("mouseenter", this.dataset.tmpCursorStick, i).on("mouseleave", this.dataset.tmpCursorStick, s);
                })
                .on("mouseleave", "[data-tmp-cursor-stick]", function () {
                    e.removeStick(), t(this).off("mouseenter", this.dataset.tmpCursorStick, i).off("mouseleave", this.dataset.tmpCursorStick, s);
                });
        }
        setState(t) {
            this.el.addClass(t);
        }
        removeState(t) {
            this.el.removeClass(t);
        }
        toggleState(t) {
            this.el.toggleClass(t);
        }
        setText(t) {
            this.text.html(t), this.el.addClass("text");
        }
        removeText() {
            this.el.removeClass("text");
        }
        setStick(e) {
            const i = this,
                s = t(e);
            let o = 1 / 0,
                n = null;
            for (const e of s) {
                const s = e.getBoundingClientRect(),
                    c = t(e).width() || 0,
                    r = t(e).height() || 0,
                    a = { y: s.top + r / 2, x: s.left + c / 2 },
                    u = (i.pos.x - a.x) ** 2 + (i.pos.y - a.y) ** 2;
                u > o || ((n = a), (o = u));
            }
            n && ((this.stick = n), this.move(this.stick.x, this.stick.y, 5));
        }
        removeStick() {
            this.stick = !1;
        }
        update() {
            this.move(), this.show();
        }
        move(t, e, i) {
            gsap.to(this.el, { x: t || this.pos.x, y: e || this.pos.y, force3D: !0, overwrite: !0, ease: this.options.ease, duration: this.visible ? i || this.options.speed : 0 });
        }
        show() {
            const t = this;
            this.visible ||
                (clearInterval(this.visibleInt),
                this.el.addClass("visible"),
                (this.visibleInt = setTimeout(function () {
                    return (t.visible = !0);
                })));
        }
        hide() {
            const t = this;
            clearInterval(this.visibleInt),
                this.el.removeClass("visible"),
                (this.visibleInt = setTimeout(function () {
                    return (t.visible = !1);
                }, this.options.visibleTimeout));
        }
    }
    class i {
        constructor(e, i) {
            const s = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {};
            (this.cursor = i),
                (this.el = t(e)),
                (this.options = t.extend(!0, { y: 0.4, x: 0.4, s: 0.3, rs: 0.5 }, this.el.data("magnetic") || s)),
                (this.y = 0),
                (this.x = 0),
                (this.width = 0),
                (this.height = 0),
                this.el.data("magnetic-init") || (this.el.data("magnetic-init", !0), this.bind());
        }
        bind() {
            const t = this;
            this.el.on("mouseenter", function (e) {
                const i = t.el.offset() || { top: 0, left: 0 };
                (t.y = i.top - window.pageYOffset), (t.x = i.left - window.pageXOffset), (t.width = t.el.outerWidth() || 0), (t.height = t.el.outerHeight() || 0), (t.cursor.stickForce = t.cursor.options.stickMagneticForce);
                const s = (e.clientY - t.y - t.height / 2) * t.options.y,
                    o = (e.clientX - t.x - t.width / 2) * t.options.x;
                t.move(o, s, t.options.s);
            }),
                this.el.on("mousemove", function (e) {
                    const i = (e.clientY - t.y - t.height / 2) * t.options.y,
                        s = (e.clientX - t.x - t.width / 2) * t.options.x;
                    t.move(s, i, t.options.s);
                }),
                this.el.on("mouseleave", function (e) {
                    t.move(0, 0, t.options.rs), (t.cursor.stickForce = t.cursor.options.stickForce);
                });
        }
        move(t, e, i) {
            gsap.to(this.el, { y: e, x: t, force3D: !0, overwrite: !0, duration: i });
        }
    }
    if (!(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) || t(window).width() <= 1024) || (t("body").addClass("disable-cursor"), 0) || !t("body").hasClass("disable-cursor")) {
        const s = new e({ container: "body:not(.unicore-docs)", visibleTimeout: 0 });
        new e({ container: "body.unicore-docs .enable-cursor", visibleTimeout: 0 });
        t("[data-tmp-magnetic]").each(function () {
            (this.dataset.tmpMagnetic ? t(this).find(this.dataset.tmpMagnetic) : t(this)).each(function () {
                new i(this, s);
            });
        });
    }
    return { tmpCursor: e, tmpMagnetic: i };
})();
