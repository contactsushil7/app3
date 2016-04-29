<div class="footer">
        <div class="left">
            <div class="btn-group dropup">                
                <button class="btn dropdown-toggle" data-toggle="dropdown"><span class="icon-cog"></span> Navigation</button>
                <ul class="dropdown-menu">
                    <li><a href="#" id="fixedNav">Fix Navigation</a></li>
                    <li><a href="#" id="collapsedNav">Collapsible Navigation</a></li>                    
                </ul>
            </div>
            <div class="btn-group dropup">                
                <button class="btn dropdown-toggle" data-toggle="dropdown">BG</button>
                <ul class="dropdown-menu" id="bgPreview">
                    <li class="bg_default"></li>
                    <li class="bg_mgrid"></li>
                    <li class="bg_crosshatch"></li>                    
                    <li class="bg_hatch"></li>
                    <li class="bg_yellow_hatch"></li>
                    <li class="bg_green_hatch"></li>
                </ul>
            </div>            
        </div>
        <div class="right">            
            &copy; 2012-2013 YourCompanyName.
        </div>
    </div>
    
    <div id="fcAddEvent" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="fcAddEventLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="fcAddEventLabel">Add new event</h3>
        </div>
        <div class="modal-body">
            <div class="row-fluid">
                <div class="span3">Title:</div>
                <div class="span9"><input type="text" id="fcAddEventTitle"/></div>
            </div>
        </div>
        <div class="modal-footer">            
            <button class="btn btn-primary" id="fcAddEventButton">Add</button>            
        </div>
    </div>