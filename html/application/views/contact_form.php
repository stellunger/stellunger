                <div class="span6">                    
                    <h4>Оставить заявку</h4><br>
                    <form action="<?php echo base_url();?>sendmail" method="post" class="form-horizontal">    
                        <div class="control-group">
                                <label class="control-label" for="inputName">Имя</label>
                                <div class="controls">
                                    <input type="text" class="span4" id="inputName" name="inputName">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="inputEmail">Эл. почта</label>
                                <div class="controls">
                                    <input type="text" class="span4" id="inputEmail" name="inputEmail">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="inputPhone">Телефон</label>
                                <div class="controls">
                                    <input type="text" class="span4" id="inputPhone" name="inputPhone">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="inputCompany">Компания</label>
                                <div class="controls">
                                    <input type="text" class="span4" id="inputCompany" name="inputCompany">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="inputMessage">Сообщение</label>
                                <div class="controls">
                                    <textarea class="span4" id="inputMessage" rows="6" name="inputMessage"></textarea>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls action">
                                    <button type="submit" class="btn">Отправить заявку</button>
                                </div>
                            </div>
                        </form>
                </div>