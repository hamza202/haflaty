var DatatablesBasicScrollable = {
    init: function () {
        $("#m_table_1").DataTable({
            scrollX: !0,
            scrollCollapse: !0,
            lengthMenu: [[5, 10, 25, 50], [5, 10, 25, 50]]
        })
    }
};
jQuery(document).ready(function () {
    DatatablesBasicScrollable.init()
});