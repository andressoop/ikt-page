<cms:if k_is_commentable>
    <div class="comment-form">
        <h3>Kommenteeri postitust</h3>

        <cms:form method="post" class="k_form">

            <cms:if k_success>

                <cms:process_comment/>

                <cms:if k_process_comment_success>
                    <cms:send_mail from=k_email_from to=k_email_to subject='Comment posted'>
                        Järgnev kommentaar on edukalt lisatud:
                        <cms:show k_success/>
                    </cms:send_mail>

                    <div class="k_successmessage">
                        <p>
                            Aitäh tagasiside eest!<br>
                            Kommentaar vaadatakse administraatori poolt üle ning postitatakse peatselt.
                        </p>
                    </div>
                    <cms:else/>
                    <div class="k_errormessage">
                        <p>
                            Postitust ei saanud lisada! <br>
                            Esines järgnev veateade:<br>
                            <cms:show k_process_comment_error/>
                        </p>
                    </div>

                </cms:if>

                <cms:else/>

                <cms:if k_logged_out>
                    <p class="comment-input">
                        <cms:input type="text" name="k_author" size="22" tabindex="1" required="1"/>
                        <label for="author">
                            <small>Nimi *</small>
                        </label>
                    </p>

                    <p class="comment-input">
                        <cms:input type="text" name="k_email" size="22" tabindex="2" validator="email" required="1"/>
                        <label for="email">
                            <small>Email * (Ei avalikustata)</small>
                        </label>
                    </p>
                    <cms:else/>
                    <p>
                        Oled sisse loginud kasutajaga <b><cms:show k_user_title/></b>.
                        <a href="<cms:show k_logout_link />"
                           onclick="if( confirm('Oled kindel, et soovid välja logida?') ) { return true; } return false;">Logi välja
                            &raquo;</a>
                    </p>
                </cms:if>

                <p class="comment-input">
                    <cms:input type="textarea" name="k_comment" style="width:93%" rows="10" cols="10" tabindex="4"
                               validator_msg="required=Please enter something as comment"
                               required="1"/>

                    <br>
                    <small>
                        <cms:html_encode>
                            Lubatud HTML märgistused: <a><br><strong><b><em><i><blockquote><code><ul><ol><li><del>
                        </cms:html_encode>
                    </small>
                </p>

                <cms:if k_logged_out>
                    <p class="comment-input">
                        <cms:input name='recaptcha_test' type='recaptcha'/>
                    </p>
                </cms:if>

                <cms:if k_error>
                    <div class="k_errormessage">
                        <h3>Kõik väljad peavad olema täidetud!</h3>
                        <ul>
                            <cms:each k_error >
                                <li><cms:show item /></li>
                            </cms:each>
                        </ul>
                    </div>
                </cms:if>

                <div class="mbr-section-btn">
                    <cms:input type="submit" class="btn btn-md-comment btn-secondary display-4" value="Postita" name="submit"/>
                </div>

            </cms:if>
        </cms:form>

    </div>
</cms:if>