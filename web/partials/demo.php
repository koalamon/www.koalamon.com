<div id="demo" style="height: 600px; width: 700px; display: none">
    <iframe src="https://calendly.com/leankoala_com" width="100%" height="100%" style="border: none">
    </iframe>
</div>

<script>
    function demo() {
        $("#demo").modal({
            opacity: 80,
            overlayCss: {backgroundColor: "#000"},
            escClose: true,
            overlayClose: true

        });
    }

    if (window.location.hash.indexOf('demo') != -1) {
        demo();
    }

</script>
