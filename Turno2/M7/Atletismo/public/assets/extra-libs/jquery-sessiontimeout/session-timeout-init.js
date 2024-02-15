var SessionTimeout = (function () {
  var i = function () {
    $.sessionTimeout({
      title: "Session Timeout Notification",
      message: "Your session is expiring soon.",
      redirUrl: "authentication-lockscreen.html",
      logoutUrl: "authentication-login1.html",
      warnAfter: 5e3,
      redirAfter: 2e4,
      ignoreUserActivity: !0,
      countdownMessage: "Redirecting in {timer} seconds.",
      countdownBar: !0,
    });
  };
  return {
    init: function () {
      i();
    },
  };
})();
jQuery(function () {
  SessionTimeout.init();
});
