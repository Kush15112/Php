<html>
    <body>
        <form action="Process.php" method="post">
            <table>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="txt1" required></td>
                </tr>
                <tr>
                    <td>Age</td>
                    <td><input type="number" name="txt2" min="1" max="100" required></td>
                </tr>
                <tr>
                    <td><button>Submit</button></td>
                    <td><button>Reset</button></td>
                </tr>
            </table>
        </form>
    </body>
</html>
        <!-- Method:
            Get: Get is Default Method to pass data in formtag.
                Data will be visible in URL. 
                It's not secure method & Searching.
            Post: Post mehtod is secure to pass Sensitive Data.
                  Data will be hidden.
            Action:You can specify name Where Data Need To be Stored.
                -->