<?php
/**
 * Shared thermal print style for sales item tables.
 *
 * @var bool $include_hsn
 */
?>
<style>
    @media print {
        #items {
            table-layout: auto !important;
        }

        #items th,
        #items td {
            word-break: normal !important;
            overflow-wrap: normal !important;
        }

        #items th.col-item-number,
        #items td.col-item-number {
            display: table-cell !important;
            width: 7% !important;
            white-space: nowrap !important;
        }

<?php if (!empty($include_hsn)) { ?>
        #items th.col-hsn,
        #items td.col-hsn {
            display: none !important;
        }
<?php } ?>

        #items th.col-qty,
        #items td.col-qty,
        #items th.col-price,
        #items td.col-price,
        #items th.col-disc,
        #items td.col-disc,
        #items th.col-total,
        #items td.col-total {
            white-space: nowrap !important;
        }

        #items th.col-qty,
        #items td.col-qty {
            width: 8% !important;
        }

        #items th.col-price,
        #items td.col-price {
            width: 13% !important;
        }

        #items th.col-disc,
        #items td.col-disc {
            width: 11% !important;
        }

        #items th.col-total,
        #items td.col-total {
            width: 13% !important;
        }
    }

    @media print {
        body.thermal-80mm #items {
            table-layout: auto !important;
        }

        body.thermal-80mm #items th,
        body.thermal-80mm #items td {
            word-break: normal !important;
            overflow-wrap: normal !important;
        }

        body.thermal-80mm #items th.col-item-number,
        body.thermal-80mm #items td.col-item-number {
            display: table-cell !important;
            width: 7% !important;
            white-space: nowrap !important;
        }

<?php if (!empty($include_hsn)) { ?>
        body.thermal-80mm #items th.col-hsn,
        body.thermal-80mm #items td.col-hsn {
            display: none !important;
        }
<?php } ?>

        body.thermal-80mm #items th.col-qty,
        body.thermal-80mm #items td.col-qty,
        body.thermal-80mm #items th.col-price,
        body.thermal-80mm #items td.col-price,
        body.thermal-80mm #items th.col-disc,
        body.thermal-80mm #items td.col-disc,
        body.thermal-80mm #items th.col-total,
        body.thermal-80mm #items td.col-total {
            white-space: nowrap !important;
        }

        body.thermal-80mm #items th.col-qty,
        body.thermal-80mm #items td.col-qty {
            width: 8% !important;
        }

        body.thermal-80mm #items th.col-price,
        body.thermal-80mm #items td.col-price {
            width: 13% !important;
        }

        body.thermal-80mm #items th.col-disc,
        body.thermal-80mm #items td.col-disc {
            width: 11% !important;
        }

        body.thermal-80mm #items th.col-total,
        body.thermal-80mm #items td.col-total {
            width: 13% !important;
        }
    }
</style>
