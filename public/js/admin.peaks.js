var Peaks = {
    init: function () {
        var options = {
            valueNames: ['serial', 'name', 'elevation']
        };
        var peakList = new List('peaks', options);
    }
};
window.onload = function () {
    Peaks.init();
};