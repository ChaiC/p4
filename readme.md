I have created an application while lets users create and fill-out polls or questionnaires.

The user can either create new forms or fill out forms created by others. Currently, the app does not provide the list of existing polls. However, all data needed to created such a list is present in the database,

The best way to test an application would be create forms and then go to home page and try and fill out the forms.

The application used 3 databases, one to store all the questions, second to map questions to polls and third to store the responses. I have not used migrations. Instead I have created the databases from mysql directly.
