var localizationobj = {
    // separator of parts of a date (e.g. '/' in 11/05/1955)
    '/': "/",
    // separator of parts of a time (e.g. ':' in 05:44 PM)
    ':': ":",
    // the first day of the week (0 = Sunday, 1 = Monday, etc)
    firstDay: 0,
    days: {
        // full day names
        names: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
        // abbreviated day names
        namesAbbr: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
        // shortest day names
        namesShort: ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"]
    },
    months: {
        // full month names (13 months for lunar calendards -- 13th month should be "" if not lunar)
        names: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December", ""],
        // abbreviated month names
        namesAbbr: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec", ""]
    },
    // AM and PM designators in one of these forms:
    // The usual view, and the upper and lower case versions
    //      [standard,lowercase,uppercase]
    // The culture does not use AM or PM (likely all standard date formats use 24 hour time)
    //      null
    AM: ["SA", "sa", "SA"],
    PM: ["CH", "ch", "CH"],
    eras: [
    // eras in reverse chronological order.
    // name: the name of the era in this culture (e.g. A.D., C.E.)
    // start: when the era starts in ticks (gregorian, gmt), null if it is the earliest supported era.
    // offset: offset in years from gregorian calendar
    {"name": "A.D.", "start": null, "offset": 0 }
],
    twoDigitYearMax: 2029,
    patterns: {
        // short date pattern
        d: "dd/MM/yyyy",
        // long date pattern
        D: "dddd, MMMM dd, yyyy",
        // short time pattern
        t: "h:mm tt",
        // long time pattern
        T: "h:mm:ss tt",
        // long date, short time pattern
        f: "dddd, MMMM dd, yyyy h:mm tt",
        // long date, long time pattern
        F: "dddd, MMMM dd, yyyy h:mm:ss tt",
        // month/day pattern
        M: "MMMM dd",
        // month/year pattern
        Y: "yyyy MMMM",
        // S is a sortable format that does not vary by culture
        S: "yyyy\u0027-\u0027MM\u0027-\u0027dd\u0027T\u0027HH\u0027:\u0027mm\u0027:\u0027ss"
    },
    percentsymbol: "%",
    currencysymbol: "$",
    currencysymbolposition: "before",
    decimalseparator: '.',
    thousandsseparator: ',',
    pagergotopagestring: "Đi đến trang:",
    pagershowrowsstring: "Số dòng hiển thị:",
    pagerrangestring: " của ",
    pagerpreviousbuttonstring: "trước",
    pagernextbuttonstring: "sau",
    groupsheaderstring: "Drag a column and drop it here to group by that column",
    sortascendingstring: "Sắp xếp tăng dần",
    sortdescendingstring: "Sắp xếp giảm dần",
    sortremovestring: "Bỏ sắp xếp",
    groupbystring: "Nhóm theo cột này",
    groupremovestring: "Bỏ nhóm",
    filterclearstring: "Xóa",
    filterstring: "Lọc",
    filtershowrowstring: "Lọc dữ liệu theo điều kiện:",
    filterorconditionstring: "hoặc",
    filterandconditionstring: "và",
    filterselectallstring: "(Chọn tất cả)",
    filterchoosestring: "Chọn:",
    filterstringcomparisonoperators: ['rỗng', 'không rỗng', 'có chứa', 'có chứa (phân biệt hoa thường)',
        'không chứa', 'không chứa (phân biệt hoa thường)', 'bắt đầu với', 'bắt đầu với (phân biệt hoa thường)',
        'kết thúc với', 'kết thúc với (phân biệt hoa thường)', 'bằng', 'bằng (phân biệt hoa thường)', 'null', 'không null'],
    filternumericcomparisonoperators: ['equal', 'not equal', 'less than', 'less than or equal', 'greater than', 'greater than or equal', 'null', 'not null'],
    filterdatecomparisonoperators: ['equal', 'not equal', 'less than', 'less than or equal', 'greater than', 'greater than or equal', 'null', 'not null'],
    filterbooleancomparisonoperators: ['equal', 'not equal'],
    validationstring: "Giá trị nhập vào không hợp lệ",
    emptydatastring: "Không có dữ liệu để hiển thị",
    filterselectstring: "Select Filter",
    loadtext: "Đang nạp...",
    clearstring: "Xóa",
    todaystring: "Hôm nay"          
};