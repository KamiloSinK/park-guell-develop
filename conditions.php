<?php require 'config.php' ?>
<!doctype html>
<html class="no-js notranslate" translate="no" lang="<?=$userLanguage['code']?>">
    <?php require 'header.php' ?>
    <body>       
    <!-- header-area START -->
    <?php require 'menu.php' ?>
    <!-- header-area END -->
    <main>
        <!-- condition area start here -->
        <div class="condition__area">
            <div class="container">
                <div class="condition__wrapper mx-auto">

                <!------- Spanish Version -------->
                    <?php if ($userLanguage['code'] == 'es') { ?>
                    <div class="single__text__box">
                        <h3>Condiciones generales de compra</h3>
                    </div>
                    <div class="condition">
                        <div class="single__text__box">
                            <h3 class="condition__title">1. Objeto de ticket-sagradafamilia.com </h3>
                            <p>ticket-sagradafamilia.com  (en lo sucesivo la web Ticket-SagradaFamilia), operada por TICKETGO OÜ, con VAT EE102695614 y domicilio en Harju maakond, Tallinn, Kesklinna linnaosa, Sakala tn 7-2, 10141 tiene como objetivo principal ofrecer a nuestros usuarios un servicio de reserva de actividades exclusivamente a través de nuestro sitio web.</p>
                        </div>
                        <div class="single__text__box">
                            <p>La presentes condiciones, así como las condiciones particulares que puedan establecerse, regulan expresamente las relaciones surgidas entre tICKET-SAGRADAFAMILIA  y los terceros (en adelante "usuarios") que reserven o adquieran entrada para la sagrada familia a través del portal ticket-sagradafamilia.com </p>
                        </div>
                    </div>
                    <div class="condition">
                        <div class="single__text__box">
                            <h3 class="condition__title">2. Reservas y Pagos e instrucciones de acceso</h3>
                            <p>ticket-sagradafamilia.com  actúa únicamente como intermediario en la reserva de actividades y entradas. Los datos necesarios para la reserva que se comparten con el proveedor son nombre, apellidos y correo electrónico de la persona en cuyo nombre se realiza la reserva. No es necesario registrarse en ticket-sagradafamilia.com  para realizar una reserva.</p>
                        </div>
                        <div class="single__text__box">
                             <p>Para adquirir tus entradas en ticket-sagradafamilia.com , sigue este sencillo proceso de compra:</p>
                        </div>
                        <div class="single__text__box">
                            <ul>
                                <li>Realiza el pago utilizando tarjetas de crédito o débito a través de la pasarela de pago proporcionada por Stripe.</li>
                                <li>Una vez completado el pago, recibirás tus entradas por correo electrónico en formato PDF. Estas entradas incluirán un identificador único, que puede ser el localizador de la reserva o un código QR emitido por la sagrada familia. El tiempo de envío de las entradas o tickets puede variar en función del horario y la demanda del momento.</li>
                                <li>Asegúrate de no duplicar la reserva, si has realizado la compra y no has recibido el email de confirmación, ponte en contacto rápidamente a través del chat o envía un email a  infosagradafamilia@ticketgotourism.com. Todas las solicitudes de reserva serán tramitadas, por lo que si vuelves a enviar una solicitud entenderemos que quieres reservar más entradas y gestionaremos las mismas</li>
                            </ul>
                        </div>
                    </div>
                    <div class="condition">
                        <div class="single__text__box">
                            <h3 class="condition__title">3. Limitaciones en la Compra de Entradas y prohibiciones</h3>
                            <p>A fin de evitar prácticas injustas en la compra de entradas para cada espectáculo, se pueden establecer limitaciones en el número máximo de entradas que un usuario puede adquirir, así como restricciones por tarjeta de crédito y otras condiciones que se comunicarán claramente en el momento de la reserva. Estas limitaciones serán verificadas en cada transacción, y en eventos donde sean aplicables, se informará debidamente a los usuarios.</p>
                        </div>
                        <div class="single__text__box">
                            <p>La reventa de entradas se considerará una violación de nuestros términos y condiciones. ticket-sagradafamilia.com  se reserva el derecho de tomar las pertinentes legales en caso de que se detecte cualquier actividad de reventa de entradas.</p>
                        </div>
                    </div>
                    <div class="condition">
                        <div class="single__text__box">
                            <h3 class="condition__title"> 4. Facturación</h3>
                            <p>El precio que se cobra en ticket-sagradafamilia.com  incluye tanto el costo de la entrada como el costo del servicio de intermediación y gestión de la reserva. Si un usuario desea una factura con desglose, puede solicitarla por correo electrónico, proporcionando el número de localizador y los datos de facturación correspondientes.</p>
                        </div>
                    </div>
                    <div class="condition">
                        <div class="single__text__box">
                            <h3 class="condition__title"> 5. Desistimiento</h3>
                            <p>Tal y como se detalla en la Ley Europea para la Defensa de Consumidores, el derecho de desistimiento no podrá ser aplicado cuando el servicio haya sido completados total o parcialmente si el consumidor ha dado su consentimiento previo y expreso y reconoce que perderá su derecho de desistimiento una vez que el contrato haya sido completamente ejecutado por el vendedor, es decir, en el momento de la compra.</p>
                        </div>
                    </div>
                    <div class="condition">
                        <div class="single__text__box">
                            <h3 class="condition__title">6. Devoluciones</h3>
                            <p>En caso de que no haya disponibilidad de entradas, ticket-sagradafamilia.com  procederá a la devolución del importe pagado por el usuario. </p>
                            <p>Una vez realizada la reserva no se permitirán modificaciones de fecha ni de hora, y no se procederá a la devolución de su importe, excepto en casos excepcionales originados por circunstancias imprevistas, los cuales se estudiarán individualmente.</p>
                        </div>
                    </div>
                    <div class="condition">
                        <div class="single__text__box">
                            <h3 class="condition__title">7. Responsabilidad del Uso de las Entradas</h3>
                            <p>Una vez que las entradas han sido entregadas al cliente a través del correo electrónico proporcionado durante el proceso de compra, la responsabilidad del uso de las mismas recae exclusivamente en el cliente. El cliente debe asegurarse de recibir, descargar y utilizar las entradas de acuerdo con las instrucciones proporcionadas.</p>
                            <p>Si el cliente no recibe las entradas en un plazo de 24 horas, o tiene algún problema con las mismas, debe informar a la organización de ticket-sagradafamilia.com a la mayor brevedad posible, a través del correo electrónico infosagradafamilia@ticketgotourism.com.</p>
                            <p>ticket-sagradafamilia.com no se hace responsable por la pérdida, robo, daño o uso indebido de las entradas una vez entregadas.</p>
                            <p>Si el cliente no utiliza las entradas adquiridas por cualquier motivo, ticket-sagradafamilia.com no se hace responsable y no se realizará ningún reembolso ni cambio. Es responsabilidad del cliente gestionar el uso adecuado de las entradas.</p>
                        </div>
                    </div>
                    <div class="condition">
                        <div class="single__text__box">
                            <h3 class="condition__title">8. Contacto y soporte</h3>
                            <p>Para cualquier consulta o asistencia adicional, los usuarios pueden ponerse en contacto a través del chat o enviando un email a infosagradafamilia@ticketgotourism.com . </p>
                            <p>El tiempo de respuesta puede variar según el horario y la demanda del momento.</p>
                        </div>
                    </div>
                    <div class="condition">
                        <div class="single__text__box">
                            <h3 class="condition__title">9. Resolución de conflictos y jurisdicción</h3>
                            <p>Cualquier conflicto que se derive de cualquier operación con ticket-sagradafamilia.com  se someterá a la competencia exclusiva de los órganos jurisdiccionales españoles.</p>
                        </div>
                        <div class="single__text__box">
                            <p>En caso de conflicto, procuraremos actuar de forma diligente o negociar de buena fe, e intentaremos alcanzar un acuerdo transaccional que resulte justo y equitativo para tus intereses y los nuestros.</p>
                            <p>Puedes también acudir a la Plataforma para la <a class="text-decoration-underline" href="#">resolución de litigios por compras en línea de la Unión Europea</a> con el fin de resolver las quejas que pudieras tener sobre tu compra en el siguiente enlace </p>
                        </div>
                    </div>
                    <div class="condition">
                        <div class="single__text__box">
                            <h3 class="condition__title">10. Protección de datos:</h3>
                            <p>Todos los datos personales que se recojan a través de la plataforma de Ticket Go serán procesados por Ticket Go OÜ, en su calidad de controlador de datos, conforme a la legislación aplicable sobre protección de datos y con los objetivos establecidos en la <a class="text-decoration-underline" href="<?=$_ENV['WEB_URL']?>privacy.php">Política de Privacidad</a>.</p>
                        </div>
                    </div>


                <!----------- French version ------------>
                    <?php } else if ($userLanguage['code'] == 'fr') { ?>
                    <div class="single__text__box">
                        <h3>Conditions Générales d'Achat</h3>
                    </div>
                    <div class="condition">
                        <div class="single__text__box">
                            <h3 class="condition__title">1. Objet de ticket-sagradafamilia.com </h3>
                            <p>ticket-sagradafamilia.com (ci-après le site ticket-sagradafamilia.com), exploité par TICKETGO OÜ, avec le numéro de TVA EE102695614 et situé à Harju maakond, Tallinn, Kesklinna linnaosa, Sakala tn 7-2, 10141, a pour objectif principal d'offrir à nos utilisateurs un service de réservation d'activités exclusivement via notre site web.</p>
                        </div>
                        <div class="single__text__box">
                            <p>Les présentes conditions, ainsi que les conditions particulières qui pourraient être établies, régulent expressément les relations entre ticket-sagradafamilia.com et les tiers (ci-après "utilisateurs") qui réservent ou achètent des billets pour ticket-sagradafamilia.com via le portail ticket-sagradafamilia.com.</p>
                        </div>
                    </div>
                    <div class="condition">
                        <div class="single__text__box">
                            <h3 class="condition__title">2. Réservations, Paiements et Instructions d'Accès</h3>
                            <p>ticket-sagradafamilia.com agit uniquement en tant qu'intermédiaire dans la réservation d'activités et de billets. Les données nécessaires pour la réservation partagées avec le fournisseur sont le nom, prénom et l'email de la personne au nom de laquelle la réservation est effectuée. Il n'est pas nécessaire de s'inscrire sur ticket-sagradafamilia.com pour faire une réservation.</p>
                        </div>
                        <div class="single__text__box">
                            <p>Pour acheter vos billets sur ticket-sagradafamilia.com, suivez ce simple processus d'achat :</p>
                        </div>
                        <div class="single__text__box">
                            <ul>
                                <li>Effectuez le paiement en utilisant des cartes de crédit ou de débit via la passerelle de paiement fournie par Stripe.</li>
                                <li>Une fois le paiement effectué, vous recevrez vos billets par email au format PDF. Ces billets comprendront un identifiant unique, qui peut être le localisateur de la réservation ou un code QR émis par ticket-sagradafamilia.com. Le délai d'envoi des billets ou tickets peut varier en fonction de l'horaire et de la demande du moment.</li>
                                <li>Assurez-vous de ne pas dupliquer la réservation, si vous avez effectué l'achat et n'avez pas reçu l'email de confirmation, contactez rapidement via le chat ou envoyez un email à infosagradafamilia@ticketgotourism.com. Toutes les demandes de réservation seront traitées, donc si vous renvoyez une demande, nous comprendrons que vous souhaitez réserver plus de billets et nous gérerons celles-ci.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="condition">
                        <div class="single__text__box">
                            <h3 class="condition__title">3. Limitations dans l'Achat de Billets et Interdictions</h3>
                            <p>Afin d'éviter des pratiques injustes dans l'achat de billets pour chaque spectacle, des limitations peuvent être établies sur le nombre maximum de billets qu'un utilisateur peut acquérir, ainsi que des restrictions par carte de crédit et d'autres conditions qui seront clairement communiquées au moment de la réservation. Ces limitations seront vérifiées à chaque transaction, et dans les événements où elles sont applicables, elles seront dûment communiquées aux utilisateurs.</p>
                        </div>
                        <div class="single__text__box">
                            <p>La revente des billets sera considérée comme une violation de nos termes et conditions. ticket-sagradafamilia.com se réserve le droit de prendre les mesures légales pertinentes en cas de détection de toute activité de revente de billets.</p>
                        </div>
                    </div>
                    <div class="condition">
                        <div class="single__text__box">
                            <h3 class="condition__title">4. Facturation</h3>
                            <p>Le prix facturé sur ticket-sagradafamilia.com inclut à la fois le coût du billet et le coût du service d'intermédiation et de gestion de la réservation. Si un utilisateur souhaite une facture détaillée, il peut la demander par email, en fournissant le numéro de localisateur et les données de facturation correspondantes.</p>
                        </div>
                    </div>
                    <div class="condition">
                        <div class="single__text__box">
                            <h3 class="condition__title">5. Droit de Rétractation</h3>
                            <p>Comme détaillé dans la Loi Européenne pour la Défense des Consommateurs, le droit de rétractation ne pourra être appliqué lorsque le service aura été complété totalement ou partiellement si le consommateur a donné son consentement préalable et explicite et reconnaît qu'il perdra son droit de rétractation une fois que le contrat aura été complètement exécuté par le vendeur, c'est-à-dire, au moment de l'achat.</p>
                        </div>
                    </div>
                    <div class="condition">
                        <div class="single__text__box">
                            <h3 class="condition__title">6. Remboursements</h3>
                            <p>Dans le cas où il n'y aurait pas de disponibilité de billets, ticket-sagradafamilia.com procédera au remboursement du montant payé par l'utilisateur.</p>
                            <p>Une fois la réservation effectuée, aucune modification de date ou d'heure ne sera autorisée, et le montant ne sera pas remboursé, sauf dans des cas exceptionnels  causés par des circonstances imprévues, qui seront étudiées individuellement.</p>
                        </div>
                    </div>
                    <div class="condition">
                        <div class="single__text__box">
                            <h3 class="condition__title">7. Responsabilité de l'Utilisation des Billets</h3>
                            <p>Une fois que les billets ont été livrés au client via l'email fourni lors du processus d'achat, la responsabilité de leur utilisation incombe exclusivement au client. Le client doit s'assurer de recevoir, télécharger et utiliser les billets selon les instructions fournies.</p>
                            <p>Si le client ne reçoit pas les billets dans un délai de 24 heures, ou rencontre un problème avec ceux-ci, il doit informer l'organisation de ticket-sagradafamilia.com dans les plus brefs délais, par email à infosagradafamilia@ticketgotourism.com.</p>
                            <p>ticket-sagradafamilia.com n'est pas responsable de la perte, du vol, des dommages ou de la mauvaise utilisation des billets une fois livrés.</p>
                            <p>Si le client n'utilise pas les billets achetés pour quelque raison que ce soit, ticket-sagradafamilia.com n'est pas responsable et aucun remboursement ou échange ne sera effectué. Il est de la responsabilité du client de gérer correctement l'utilisation des billets.</p>
                        </div>
                    </div>
                    <div class="condition">
                        <div class="single__text__box">
                            <h3 class="condition__title">8. Contact et Support</h3>
                            <p>Pour toute consultation ou assistance supplémentaire, les utilisateurs peuvent contacter via le chat ou envoyer un email à infosagradafamilia@ticketgotourism.com.</p>
                            <p>Le temps de réponse peut varier selon l'horaire et la demande du moment.</p>
                        </div>
                    </div>
                    <div class="condition">
                        <div class="single__text__box">
                            <h3 class="condition__title">9. Résolution de Conflits et Juridiction</h3>
                            <p>Tout conflit découlant de toute opération avec ticket-sagradafamilia.com sera soumis à la compétence exclusive des organes juridictionnels espagnols.</p>
                        </div>
                        <div class="single__text__box">
                            <p>En cas de conflit, nous tenterons d'agir de manière diligente ou de négocier de bonne foi, et nous essaierons d'atteindre un accord transactionnel qui soit juste et équitable pour vos intérêts et les nôtres.</p>
                            <p>Vous pouvez également recourir à la Plateforme pour la résolution de litiges par achats en ligne de l'Union Européenne afin de résoudre les plaintes que vous pourriez avoir concernant votre achat au lien suivant.</p>
                        </div>
                    </div>
                    <div class="condition">
                        <div class="single__text__box">
                            <h3 class="condition__title">10. Protection des données:</h3>
                            <p>Toutes les données personnelles collectées via la plateforme Ticket Go seront traitées par Ticket Go OÜ en tant que responsable du traitement, conformément aux lois applicables sur la protection des données et aux fins décrites dans la <a class="text-decoration-underline" href="<?=$_ENV['WEB_URL']?>privacy.php">Politique de Confidentialité</a>.</p>
                        </div>
                    </div>
                        
                        
                        
                        
                <!--- English Version --->
                    <?php } else { ?>
                    <div class="single__text__box">
                        <h3>General Terms of Purchase</h3>
                    </div>
                    <div class="condition">
                        <div class="single__text__box">
                            <h3 class="condition__title">1. Object of ticket-sagradafamilia.com </h3>
                            <p>ticket-sagradafamilia.com (hereinafter the website), operated by TicketGo OÜ (hereinafter SAGRADA FAMILIA), with VAT EE102695614 and registered office at Sakala tn 7-2. 10141 Kesklinna linnaosa. Tallinn, Harju maakond, Estonia, has the main objective of offering our users a reservation service for activities exclusively through our website.</p>
                        </div>
                        <div class="single__text__box">
                            <p>These terms and conditions, as well as any specific conditions that may be established, expressly regulate the relationships between ticket-SagradaFamilia and third parties (hereinafter "users") who reserve or purchase tickets for Sagrada Familia through the ticket-sagradafamilia.com portal. </p>
                        </div>
                    </div>
                    <div class="condition">
                        <div class="single__text__box">
                            <h3 class="condition__title">2. Reservations and Payments and Access Instructions</h3>
                            <p>ticket-SagradaFamilia acts solely as an intermediary in the reservation of activities and tickets. The data required for the reservation shared with the provider are the name, surname, and email of the person on whose behalf the reservation is made. Registration with ticket-SagradaFamilia is not required to make a reservation.</p>
                        </div>
                        <div class="single__text__box">
                             <p>To purchase your tickets at ticket-SagradaFamilia, follow this simple purchase process:</p>
                        </div>
                        <div class="single__text__box">
                            <ul>
                                <li>Make payment using credit or debit cards through the payment gateway provided by Stripe.</li>
                                <li>Once the payment is complete, you will receive your tickets by email in PDF format. These tickets will include a unique identifier, which may be the reservation locator or a QR code issued by Sagrada Familia. The delivery time for tickets may vary depending on the schedule and demand at the time.</li>
                                <li>Make sure not to duplicate the reservation. If you have made the purchase and have not received the confirmation email, please contact us quickly via chat or send an email to infosagradafamilia@ticketgotourism.com. All reservation requests will be processed, so if you resend a request, we will assume you want to reserve additional tickets, and we will manage them accordingly.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="condition">
                        <div class="single__text__box">
                            <h3 class="condition__title">3. Limitations on Ticket Purchase and Prohibitions</h3>
                            <p>To prevent unfair practices in ticket purchases for each event, limitations may be set on the maximum number of tickets a user can purchase, as well as restrictions on credit cards and other conditions that will be clearly communicated at the time of booking. These limitations will be verified in each transaction, and in events where they apply, users will be duly informed.</p>
                        </div>
                        <div class="single__text__box">
                            <p>Ticket resale will be considered a violation of our terms and conditions. ticket-SagradaFamilia reserves the right to take appropriate legal action if any ticket resale activity is detected.</p>
                        </div>
                    </div>
                    <div class="condition">
                        <div class="single__text__box">
                            <h3 class="condition__title"> 4. Billing</h3>
                            <p>The price charged by ticket-SagradaFamilia includes both the cost of the ticket and the cost of the reservation intermediary and management service. If a user wishes to receive an invoice with a breakdown, they can request it by email, providing the locator number and the corresponding billing information.</p>
                        </div>
                    </div>
                    <div class="condition">
                        <div class="single__text__box">
                            <h3 class="condition__title"> 5. Right of Withdrawal</h3>
                            <p>As detailed in the European Consumer Protection Law, the right of withdrawal cannot be applied when the service has been completed in whole or in part if the consumer has given their prior and express consent and acknowledges that they will lose their right of withdrawal once the contract has been fully executed by the seller, that is, at the time of purchase.</p>
                        </div>
                    </div>
                    <div class="condition">
                        <div class="single__text__box">
                            <h3 class="condition__title">6. Refunds</h3>
                            <p>In case of ticket unavailability, ticket-sagradafamilia.com will proceed to refund the amount paid by the user. </p>
                            <p>Once the reservation has been made, changes in date or time will not be allowed, and no refund will be made, except in exceptional cases arising from unforeseen circumstances, which will be individually reviewed.</p>
                        </div>
                    </div>
                    <div class="condition">
                        <div class="single__text__box">
                            <h3 class="condition__title">7. Responsibility for Ticket Use</h3>
                            <p>Once the tickets have been delivered to the customer via the email provided during the purchase process, the responsibility for their use lies exclusively with the customer. The customer must ensure that they receive, download, and use the tickets according to the provided instructions</p>
                            <p>If the customer does not receive the tickets within 24 hours, or has any issues with them, they must inform the ticket-sagradafamilia.com organization as soon as possible, via email at infosagradafamilia@ticketgotourism.com.</p>
                            <p>ticket-sagradafamilia.com is not responsible for the loss, theft, damage, or misuse of the tickets once delivered.</p>
                            <p>If the customer does not use the purchased tickets for any reason, ticket-sagradafamilia.com is not responsible and no refund or exchange will be given. It is the customer's responsibility to properly manage the use of the tickets.</p>
                        </div>
                    </div>
                    <div class="condition">
                        <div class="single__text__box">
                            <h3 class="condition__title">8. Contact and Support</h3>
                            <p>For any inquiries or additional assistance, users can contact us via chat or by sending an email to infosagradafamilia@ticketgotourism.com . </p>
                            <p>Response times may vary depending on the schedule and demand at the time.</p>
                        </div>
                    </div>
                    <div class="condition">
                        <div class="single__text__box">
                            <h3 class="condition__title">9. Conflict Resolution and Jurisdiction</h3>
                            <p>Any conflict arising from any operation with ticket-sagradafamilia.com will be subject to the exclusive jurisdiction of the Spanish courts.</p>
                        </div>
                        <div class="single__text__box">
                            <p>In case of conflict, we will seek to act diligently or negotiate in good faith and attempt to reach a settlement agreement that is fair and equitable for your interests and ours.</p>
                            <p>You can also resort to the Online Dispute Resolution Platform of the European Union to address any complaints you may have about your purchase at the following link.</p>
                        </div>
                    </div>
                    <div class="condition">
                        <div class="single__text__box">
                            <h3 class="condition__title">10. Data Protection:</h3>
                            <p>All personal data collected through the Ticket Go platform will be processed by Ticket Go OÜ, as the data controller, in accordance with applicable data protection laws and for the purposes described in the <a class="text-decoration-underline" href="<?=$_ENV['WEB_URL']?>privacy.php">Privacy Policy</a>.</p>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- condition area end here -->
    </main>
        <!---------footer Section START ---------->
        <?php require 'footer.php' ?>
        <!---------footer Section End ---------->
		<!-- JS here --> 
        <?php require 'scripts.php' ?>
    </body>
</html>
