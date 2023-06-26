import $ from "jquery";

const line = $(".timeline-innerline");

let i = 0;
let i2 = 1;
let target1 = $(".timeline .ul-time");
let target2 = $(".timeline .ul-time .li-time");

const timeline_events = $(".ul-time .li-time");

function showTime(e) {
  $(e).attr("done", "true");
  $(e).find(".timeline-point").css("background", "blue");
  $(e).find(".date").css("opacity", "100%");
  $(e).find(".legend").css("opacity", "100%");
  $(e).find(".legend").css("transform", "translateY(0px)");
  $(e).find(".img-legend").css("opacity", "100%");
  $(e).find(".img-legend").css("transform", "translateY(0px)");
  $(e).find(".tex-legend").css("opacity", "100%");
}

function hideTime(e) {
  $(e).removeAttr("done");
  $(e).find(".timeline-point").css("background", "rgb(228, 228, 228)");
  $(e).find(".date").css("opacity", "0%");
  $(e).find(".legend").css("opacity", "0%");
  $(e).find(".legend").css("transform", "translateY(-10px)");
  $(e).find(".img-legend").css("opacity", "0%");
  $(e).find(".img-legend").css("transform", "translateY(-10px)");
  $(e).find(".tex-legend").css("opacity", "0%");
}

function slowLoop() {
  setTimeout(function () {
    showTime(timeline_events[i]);
    timelineProgress(i + 1);
    i++;
    if (i < timeline_events.length) {
      slowLoop();
    }
  }, 800);
}

function timelineProgress(value) {
  let progress = `${(value / timeline_events.length) * 100}%`;
  if (window.matchMedia("(min-width: 768px)").matches) {
    line.css("width", progress);
    line.css("height", "4px");
  } else {
    line.css("height", progress);
    line.css("width", "4px");
  }
}

let observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.intersectionRatio > 0.9) {
        if (window.matchMedia("(min-width: 768px)").matches) {
          slowLoop();
        } else {
          showTime(entry.target);
          timelineProgress(i2);
          i2++;
        }
        observer.unobserve(entry.target);
      }
    });
  },
  { threshold: 1, rootMargin: "0px 0px -50px 0px" }
);

if (window.matchMedia("(min-width: 768px)").matches) {
  // observer.observe(target1);
} else {
  target2.each(function () {
    observer.observe($(this)[0]);
  });
}

timeline_events.each(function (index) {
  $(this).click(function () {
    if ($(this).attr("done")) {
      timelineProgress(index);

      // hide all timeline events from last upto the point clicked
      timeline_events.each(function (idx) {
        if (idx >= index) {
          hideTime($(this));
        }
      });
    } else {
      timelineProgress(index + 1);
      // show all timeline events from first upto the point clicked
      timeline_events.each(function (idx) {
        if (idx <= index) {
          showTime($(this));
        }
      });
    }
  });
});

var doit;
$(window).resize(function () {
  clearTimeout(doit);
  doit = setTimeout(resizeEnd, 1200);
});

function resizeEnd() {
  i = 0;
  slowLoop();
}
