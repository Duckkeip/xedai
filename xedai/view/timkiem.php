    
    <form  action="index.php?pid=6" method="post">
        <table style="width:600px ; border:3px; cellpadding=2">
            <tr>
                <td >
                    Nhập từ khóa cần tìm:
                </td>
                <td>
                    <input type="text" name="tukhoa" onkeydown="submitOnEnter(event)">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div align=center>
                        <input type="submit" name="timkiem" value="TÌM KIẾM">
                </td>
            </tr>
        </table>
    </form>

    <script>
    function submitOnEnter(event) {
    if (event.key === "Enter") {
        document.getElementById("timkiemForm").submit();
    }
        }
</script>
    