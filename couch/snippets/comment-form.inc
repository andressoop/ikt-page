<cms:if k_is_commentable>
    <div class="comment-form">
        <h3>
            <cms:if k_lang='ee'>
                Kommenteeri postitust
                <cms:else />
                Comment this post
            </cms:if>
        </h3>

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
                            <cms:if k_lang='ee'>
                                Aitäh tagasiside eest!<br>
                                Kommentaar vaadatakse administraatori poolt üle ning postitatakse peatselt.
                                <cms:else />
                                Thank you for your feedback!<br>
                                The comment will appear once approved by the administrator.
                            </cms:if>
                        </p>
                    </div>
                    <cms:else/>
                    <div class="k_errormessage">
                        <p>
                            <cms:if k_lang='ee'>
                                Postitust ei saanud lisada! <br>
                                Esines järgnev veateade:<br>
                                <cms:else />
                                Posting the comment was unsuccessful! <br>
                                Encountered following error:<br>
                            </cms:if>
                            <cms:show k_process_comment_error/>
                        </p>
                    </div>

                </cms:if>

                <cms:else/>

                <cms:if k_logged_out>
                    <p class="comment-input">
                        <cms:input type="text" name="k_author" size="22" tabindex="1" required="1"/>
                        <label for="author">
                            <small>
                                <cms:if k_lang='ee'>
                                    Nimi *
                                    <cms:else />
                                    Name *
                                </cms:if>
                            </small>
                        </label>
                    </p>

                    <p class="comment-input">
                        <cms:input type="text" name="k_email" size="22" tabindex="2" validator="email" required="1"/>
                        <label for="email">
                            <small>
                                <cms:if k_lang='ee'>
                                    E-post * (Ei avalikustata, gmaili olemasolul kuvatakse sinu pilt)
                                    <cms:else />
                                    Email * (Not published, if gmail, profile picture is displayed)
                                </cms:if>
                            </small>
                        </label>
                    </p>
                    <cms:else/>
                    <p>
                        <cms:if k_lang='ee'>
                            Oled sisse loginud kasutajaga <b><cms:show k_user_title/></b>.
                            <a href="<cms:show k_logout_link />"
                               onclick="if( confirm('Oled kindel, et soovid välja logida?') ) { return true; } return false;">Logi välja
                                &raquo;</a>
                            <cms:else />
                            You are logged in as <b><cms:show k_user_title/></b>.
                            <a href="<cms:show k_logout_link />"
                               onclick="if( confirm('Are you sure you want to log out?') ) { return true; } return false;">Log out
                                &raquo;</a>
                        </cms:if>
                    </p>
                </cms:if>

                <p class="comment-input">
                    <cms:if k_lang='ee'>
                        <cms:input type="textarea" name="k_comment" style="width:93%" rows="10" cols="10" tabindex="4"
                                   validator_msg="required=Palun lisa kommentaarile ka sisu"
                                   required="1"/>
                        <br>
                        <small>
                            <cms:html_encode>
                                Lubatud HTML märgistused: <a><br><strong><b><em><i><blockquote><code><ul><ol><li><del>
                            </cms:html_encode>
                        </small>
                        <cms:else />
                        <cms:input type="textarea" name="k_comment" style="width:93%" rows="10" cols="10" tabindex="4"
                                   validator_msg="required=Please enter something as comment"
                                   required="1"/>
                        <br>
                        <small>
                            <cms:html_encode>
                                Allowed HTML tags: <a><br><strong><b><em><i><blockquote><code><ul><ol><li><del>
                            </cms:html_encode>
                        </small>
                    </cms:if>
                </p>

                <cms:if k_logged_out>
                    <p class="comment-input">
                        <cms:input name='recaptcha_test' type='recaptcha'/>
                    </p>
                </cms:if>

                <cms:if k_error>
                    <div class="k_errormessage">
                        <h3>
                            <cms:if k_lang='ee'>
                                Kõik väljad peavad olema täidetud!
                                <cms:else />
                                All fields must be filled!
                            </cms:if>
                        </h3>
                        <ul>
                            <cms:each k_error >
                                <li><cms:show item /></li>
                            </cms:each>
                        </ul>
                    </div>
                </cms:if>

                <div class="mbr-section-btn">
                    <cms:if k_lang='ee'>
                        <cms:input type="submit" class="btn btn-md-comment btn-secondary display-4" value="Postita" name="submit"/>
                        <cms:else />
                        <cms:input type="submit" class="btn btn-md-comment btn-secondary display-4" value="Post" name="submit"/>
                    </cms:if>
                </div>

            </cms:if>
        </cms:form>

    </div>
</cms:if>