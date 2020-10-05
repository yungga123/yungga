<?php 
defined('BASEPATH') or die('Access Denied');
?>
    <script>
        <?php if ($title == "Success!!!") { ?>
            setTimeout(() => {
                window.location.href = "<?php echo site_url('') ?>"
            }, 3000);
        <?php } ?>
    </script>

</body>
</html>