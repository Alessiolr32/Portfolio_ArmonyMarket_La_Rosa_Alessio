<body style="margin:0; padding:0; background:#f0f4f8;">
    <table width="100%" cellspacing="0" cellpadding="0" border="0" style="background-color:#f0f4f8; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
        <tr>
            <td align="center" style="padding:60px 0 30px 0;">                
                <table width="650" cellspacing="0" cellpadding="0" border="0" style="background-color:#ffffff; border-radius:20px; box-shadow:0 4px 12px rgba(0,0,0,0.08); font-family:Segoe UI, Roboto, Arial, sans-serif; border-collapse:collapse;">
                    
                    <tr>
                        <td align="center" style="padding:25px 25px 0 25px;">
                            <img src="https://www.armonycucine.it/wp-content/uploads/2025/03/ARMONY-LOGOweb-1.png" 
                            alt="Armony Logo" 
                            style="max-width:200px; display:block; border:0;">
                        </td>
                    </tr>
                    
                    <tr>
                        <td align="center" style="color:#0d6efd; font-size:24px; font-weight:bold; padding-bottom:20px;">
                            Nuova richiesta Revisore
                        </td>
                    </tr>
                    
                    <tr>
                        <td style="background:#f8faff; padding:25px 25px 40px 25px; border-radius:15px;">
                            
                            <div align="center" style="margin-bottom:5px;">
                                <span style="font-size:16px; color:#333;">
                                    L'utente: 
                                    <strong>{{ ucwords($user->name) }}</strong> 
                                    (<a href="mailto:{{ $user->email }}" style="color:#0d6efd; text-decoration:none;">{{ $user->email }}</a>)
                                </span>
                            </div>
                            
                            <div align="center" style="margin-bottom:20px;">
                                <p style="font-size:16px; color:#333; line-height:1.6; margin:0;">
                                    ha inviato una richiesta per il ruolo di <strong>Revisore</strong>.
                                </p>
                            </div>
                            
                            <h3 style="color:#0d6efd; margin:20px 0 10px; text-align:left;">Motivazione:</h3>
                            
                            <blockquote style="margin:0; padding:15px 20px; background:#ffffff; border-radius:10px; font-style:italic; color:#444; text-align:left;">
                                {{ $messageContent }}
                            </blockquote>                            
                        </td>
                    </tr>
                    
                    <tr>
                        <td align="center" style="padding-top:30px;">
                            <a href="{{ $signedUrl }}" 
                            style="background:#0d6efd; background:linear-gradient(135deg,#0d6efd,#4dabf7); color:white; padding:14px 35px; text-decoration:none; font-weight:bold; font-size:16px; border-radius:50px; display:inline-block;">
                            Conferma come Revisore</a>                            
                        </td>
                    </tr>
                    
                    <tr>
                        <td align="center" style="font-size:12px; color:#777; padding-top:10px; line-height:1.5;">
                            <p>Questa è un’email automatica di <strong>Armony Market</strong></p>
                        </td>
                    </tr>                    
                </table>
            </td>
        </tr>
    </table>
</body>
