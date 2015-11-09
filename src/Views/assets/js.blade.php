<script type="application/javascript">
    $(document).ready(function () {

        //--------------------------------------------------------------------------------------------------------------
        // TOOLTIP
        //--------------------------------------------------------------------------------------------------------------
        $('[ao-tooltip]', document).each(function () {
            $(this).attr('container', 'body').attr('data-placement', $(this).attr('ao-tooltip')).tooltip({'html': true});
        });

        //--------------------------------------------------------------------------------------------------------------
        // POPOVER
        //--------------------------------------------------------------------------------------------------------------
        $('[ao-popover]', document).each(function () {
            $(this).attr('container', 'body').attr('data-placement', $(this).attr('ao-popover')).popover({'html': true});
        });
        $(document).on('click', '[ao-popover]', function () {
            $('[ao-popover]', document).not(this).popover('hide');
        });

        //--------------------------------------------------------------------------------------------------------------
        // COLLAPSE
        //--------------------------------------------------------------------------------------------------------------
        var statusCollapseDblclick = false;
        $(document).on('dblclick', '[data-parent=panel-group-collapse] [data-toggle=collapse]', function () {
            statusCollapseDblclick = true;

        }).on('hidden.bs.collapse shown.bs.collapse', '.panel', function () {
            if (statusCollapseDblclick) {
                statusCollapseDblclick = false;
                $('.collapse', $(this).closest('.panel-group')).collapse(($('.panel-collapse', this).hasClass('in') ? 'show' : 'hide'));
            }

        }).on('click', '.btn-collapse-expand', function () {
            var group = $(this).closest('.panel-group');
            $('.collapse', group).collapse('show');
            $('.panel-title i', group).attr('class', 'glyphicon glyphicon-minus-sign');

        }).on('click', '.btn-collapse-reduce', function () {
            var group = $(this).closest('.panel-group');
            $('.collapse', group).collapse('hide');
            $('.panel-title i', group).attr('class', 'glyphicon glyphicon-plus-sign');

        }).on('shown.bs.collapse', '.panel', function () {
            $('.panel-title > i', this).attr('class', 'glyphicon glyphicon-minus-sign');

        }).on('hidden.bs.collapse', '.panel', function () {
            $('.panel-title > i', this).attr('class', 'glyphicon glyphicon-plus-sign');

        }).on('click', '[type=submit]', function () {
            $('.collapse', $(this).closest('form')).collapse('show');
        });

        //--------------------------------------------------------------------------------------------------------------
        // INPUT RANGE
        //--------------------------------------------------------------------------------------------------------------
        $(document).on('mousemove', 'input[type=range]', function () {
            $('.input-group-range-current', $(this).closest('.input-group-range')).html($(this).val() + '%');
        });

        //--------------------------------------------------------------------------------------------------------------
        // SEARCH RANG
        //--------------------------------------------------------------------------------------------------------------
        $('.search-range', document).each(function () {
            searchRangeUp($(this));
        });
        $(document).on('mousemove', '.search-range input[type=range]', function () {
            searchRangeUp($(this).closest('.search-range'));
        });
        $(document).on('change', '.search-range input[type=range]', function () {
            window.location.href = $(this).attr('data-href').replace('REPLACE', $(this).val());
        });
        function searchRangeUp(obj) {
            $('.search-range-current', obj).html('(' + $('input[type=range]', obj).val() + '%)');
        }

    });
</script>