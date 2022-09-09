As promised, here is a simple example repository to reproduce the issue that I encountered.

- Clone the repository
- Setup your environment file
- Setup your database
- Generate an app key
- Run composer install
- Run npm install
- Run npm run dev
- Navigate to the home page
- Register an account
- Navigate to the dashboard
- Click Create user

Once you have followed the above steps, you should see the weird rendering loop issue, I suggest you close the tab once you have seen it. Now, remove the AppLayout from the Create.vue in Users/ to see some other issues (see the bullet points at the very bottom).

Removing the AppLayout from the Create.vue in Users/ does fix the weird rendering loop issue however, it seems the modal behaviour then acts weirdly. It applies the correct route. If this correct, and I shouldn't use a layout then:

2) Why does the installation guide say to add <Modal /> to the layout?
2) How do I trigger the modal to close?

- Closing the modal as it currently is does not update the route.
- Closing the modal and navigating to another page triggers the modal. This happens to any link.  e.g. Trigger the modal, and then click on the Dashboard link at the top.