
<!doctype html>
<html lang="en">


<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
</head>

<div class="input-group date" id="datepicker">
    <input type="text" name="regdob" value="{{ Session::get('regdob') }}" class="form-style" placeholder="Date of Birth" style="border-top-right-radius: 0; border-bottom-right-radius: 0; width: 90%;">
    <i class="input-icon"><iconify-icon icon="uil:user"></iconify-icon></i>
    <span class="input-group-append" style="width: 10%;">
        <span class="input-group-text d-flex justify-content-center align-items-center" style="color: #ffeba7; background-color: #15151c; border: none; padding: 0; width: 100%; margin: 0 auto;">
            <i class="fa fa-calendar"></i>
        </span>
    </span>
</div>

<script type="text/javascript">
    $(function() {
        $('#datepicker').datepicker({
            format: "dd M yyyy",
            orientation: "bottom",
            autoclose: true,
        });
    });
</script>

</html>

<style scoped>
    .dropdown-menu{
        background-color: #15151c;
        color: #c4c3ca;
    }

    .datepicker table tr td.new, .datepicker table tr td.old{
        color: #636377;
    }

    .datepicker-dropdown.datepicker-orient-top:after{
        border-top: 6px solid #15151c;
    }

    .datepicker-dropdown.datepicker-orient-top:before{
        border-top: 6px solid #15151c;
    }

    .datepicker table tr td span.focused, .datepicker table tr td span:hover {
        background: #373741;
    }
    
    .datepicker table tr td.day.focused, .datepicker table tr td.day:hover {
        background: #373741;
    }
</style>