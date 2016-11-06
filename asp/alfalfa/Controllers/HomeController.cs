using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using System.Net;
using System.Net.Mail;

namespace alfalfa.Controllers
{
    public class HomeController : Controller
    {
        public ActionResult Index()
        {
            return View();
        }

        public ActionResult Bales()
        {
            return View();
        }

        [HttpPost]
        public ActionResult Bales(FormCollection form)
        {
            string form_email = form["email"];
            string form_message = form["message"];

            if (form_email != null && form_message != null)
            {
                var body = @"<html> 
                            <head>
                                <title>HTML email</title>
                            </head>
                            <body>
                                <h1>Buy inquiry!</h1>
                                <p><span style='font-weight: bold;'>Product:</span>{0}</p>
                                <p><span style='font-weight: bold;'>Email:</span>{1}</p>
                                <p><span style='font-weight: bold;'>Message:</span>{2}</p>
                           </body>
                           </html>";

                var message = new MailMessage();
                message.To.Add(new MailAddress("s.kalaida.biz@gmail.com"));  // replace with valid value 
                message.From = new MailAddress("admin@alfalfa.in.ua");  // replace with valid value
                message.Subject = "alfalfa.ua: Someone wants to BUY BALES!";
                message.Body = string.Format(body, "BALES", form_email, form_message);
                message.IsBodyHtml = true;

                using (var smtp = new SmtpClient())
                {
                    var credential = new NetworkCredential
                    {
                        UserName = "admin@alfalfa.in.ua",  // replace with valid value
                        Password = "123456"  // replace with valid value
                    };
                    smtp.Credentials = credential;
                    smtp.Host = "localhost";
                    smtp.Port = 25;
                    smtp.EnableSsl = true;
                    smtp.Send(message);
                    return RedirectToAction("Thanks");
                }
            }
            return RedirectToAction("Bales");
        }

        public ActionResult Pellets()
        {
            return View();
        }

        [HttpPost]
        public ActionResult Pellets(FormCollection form)
        {
            string form_email = form["email"];
            string form_message = form["message"];

            if (form_email != null && form_message != null)
            {
                var body = @"<html> 
                            <head>
                                <title>HTML email</title>
                            </head>
                            <body>
                                <h1>Buy inquiry!</h1>
                                <p><span style='font-weight: bold;'>Product:</span>{0}</p>
                                <p><span style='font-weight: bold;'>Email:</span>{1}</p>
                                <p><span style='font-weight: bold;'>Message:</span>{2}</p>
                           </body>
                           </html>";

                var message = new MailMessage();
                message.To.Add(new MailAddress("s.kalaida.biz@gmail.com"));  // replace with valid value 
                message.From = new MailAddress("admin@alfalfa.in.ua");  // replace with valid value
                message.Subject = "alfalfa.ua: Someone wants to BUY PELLETS!";
                message.Body = string.Format(body, "PELLETS", form_email, form_message);
                message.IsBodyHtml = true;

                using (var smtp = new SmtpClient())
                {
                    var credential = new NetworkCredential
                    {
                        UserName = "admin@alfalfa.in.ua",  // replace with valid value
                        Password = "123456"  // replace with valid value
                    };
                    smtp.Credentials = credential;
                    smtp.Host = "localhost";
                    smtp.Port = 25;
                    smtp.EnableSsl = true;
                    smtp.Send(message);
                    return RedirectToAction("Thanks");
                }
            }
            return RedirectToAction("Pellets");
        }

        public ActionResult Prices()
        {
            return View();
        }

        public ActionResult About()
        {
            return View();
        }

        public ActionResult Contact()
        {
            return View();
        }

        [HttpPost]
        public ActionResult Contact(FormCollection form)
        {
            string form_email = form["email"];
            string form_message = form["message"];

            if (form_email != null && form_message != null)
            {
                var body = @"<html> 
                            <head>
                                <title>HTML email</title>
                            </head>
                            <body>
                                <h1>New Lead!</h1>
                                <p><span style='font-weight: bold;'>Email:</span>{0}</p>
                                <p><span style='font-weight: bold;'>Message:</span>{1}</p>
                           </body>
                           </html>";

                var message = new MailMessage();
                message.To.Add(new MailAddress("s.kalaida.biz@gmail.com"));  // replace with valid value 
                message.From = new MailAddress("admin@alfalfa.in.ua");  // replace with valid value
                message.Subject = "alfalfa.in.ua: Someone's just contacted us!";
                message.Body = string.Format(body, form_email, form_message);
                message.IsBodyHtml = true;

                using (var smtp = new SmtpClient())
                {
                    var credential = new NetworkCredential
                    {
                        UserName = "admin@alfalfa.in.ua",  // replace with valid value
                        Password = "123456"  // replace with valid value
                    };
                    smtp.Credentials = credential;
                    smtp.Host = "admin@alfalfa.in.ua";
                    smtp.Port = 25;
                    smtp.EnableSsl = true;
                    smtp.Send(message);
                    return RedirectToAction("Thanks");
                }
            }
            return RedirectToAction("Contact");
        }

        public ActionResult Thanks()
        {
            return View();
        }

        public ActionResult ThanksForSubscription()
        {
            return View();
        }

        public ActionResult QualityStandarts()
        {
            return View();
        }
    }
}