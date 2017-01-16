<!DOCTYPE html>
<html>
    <head>
        <title>Apples and Oranges</title>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Apples and Oranges</div>
                <div>
                    <form>
                        <input type="text" name="ratable"/>
                        <input type="submit" value="Submit"/>
                    </form>
                </div>
                <div>
                    Things to rate:
                    {{ $suggestedRatablesList }}
                </div>
                <div>
                    Things you've rated:
                    {{ $alreadyRatedList }}
                </div>
                <div>
                    <a href="#">request new ratable</a>
                </div>
            </div>
        </div>
    </body>
</html>
