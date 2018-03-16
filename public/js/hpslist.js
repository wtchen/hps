var Peaks = {
    init: function () {
        var options = {
            valueNames: ['serial', 'name', 'elevation'],
            searchClass: 'peaksearch'
        };
        var peakList = new List('peaks', options);

        var options2 = {
            valueNames: ['region']
        };
        var peakList2 = new List('peaks', options2);
        document.querySelector('select.region').onchange = function () {
            var selection = this.value;
            peakList2.filter(function (item) {
                return (item.values().region == selection);
            });
        };
    }
};
window.onload = function () {
    Peaks.init();
};