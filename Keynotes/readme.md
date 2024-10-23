Technical debt : Technological debt, often referred to as technical debt, is the cost incurred due to taking shortcuts or making less-than-optimal decisions during the development process. It's usually paid back in time and frustration as these decisions can lead to more complex code that's harder to maintain and expand. It's important to minimize technical debt for the long-term sustainability of a project.



Keypoints:
- Architecture because we want our applications to contain two attributes
- High Maintainability
- Low Technical Debt

- A good architecture early on in a project can help prevent such issues.
- You can think of an interface as contract, which defines an application need.

- Coding is like anyone can do small school student also do. challenge here is are they following the engineer principles before writing the code ?
- Separate Domain & Infrastructure (is a hexagonal-architecture also known as port & adpator).
- and that rule says that the everything that is outside depends on the inside but inside can not be depends on the outside.
- Hexagonal Architecture having 2 Type of Adpter (Left and Right Adpater).
- Why are you asking question such as system Architect while it is possition for SSE.

## Tips & Tricks use in Hexagonal Architecture
1. Instantiate the right-side adapters
2. Instantiate the hexagon (domain)
3. Instantiate the left-side adapters (To expose the app)


## FAQ's
- How to implement third party lib in hexagoanal?
- 

## Case Study of correct project
- InMemoryDatabase class acts as an adapter.
- PayByCardCommandHandler class act as an use case.
- Domain classes (Account, Amount, TransactionLog).


## Refrence Link :
- https://fideloper.com/hexagonal-architecture
- Head First Design Patterns book (read more)
- https://oumarkonate.com/hexagonal-architecture-an-example-of-implementation/ (pending...)
- https://www.developers.nl/blog/35/hexagonal-architecture-in-php (Pending...)
- https://fideloper.com/hexagonal-architecture
- https://speakerdeck.com/fideloper/hexagonal-architecture?slide=50
- https://www.linkedin.com/in/juliette-maraux-parisot-9ab69b84/
- https://www.linkedin.com/in/romain-brocheton/?originalSubdomain=fr
- BaaS (Backend as a Service) and SaaS (Software as a Service) are popular models for cloud computing. 
- hexagonal-architecture in react or js
- Clear Architecture book
- Domain Driven Design book (Eric Evans)
- https://github.com/nicoespeon/talk-secrets-hexagonal-architecture
- https://marketplace.visualstudio.com/items?itemName=nicoespeon.slides
- https://lucid.app/lucidchart/
- https://www.mermaidchart.com/
- https://plantuml.com/en-dark/
- https://www.mermaidchart.com/play?utm_source=mermaid_live_editor&utm_medium=banner_ad&utm_campaign=visual_editor#pako:eNqVVdtq3DAQ_RWxT7vE_gE_FLKbQgOllHTpS1PCWBpcgSUFSQ6YJf9eyZa9kmxvU8Ne0JyZOXNmRr7sqGK4q3a0BWMeODQaxLMk7hlOyD2lqpOWXMZD_5SyEzXqivywmssmMtTQgqRYkXvhna6Wu5cXqqSxuqN2bwY3MkYpApYE30PkxLDmds-dEQZMbKMa2aaxQXscw-0PFeEJE2c7dVqjpL03mqiG92eZlC4Wlb9B22EWsaQh3FKQpGxPdfAvQlIyOWbUf3rQfxEf7MDYhhymq60GuqJWVvFZgzQOyJX8qpqkcs5W-s3AOjUe3PeZC3wUorNQtxghYBwf51ZNo-T-f5ZW979-354PzoplaOJTFstQ5JooU_ORrarlLD64t93g72FpLo7G-2zUkk9QikoEDYTnULFJBEu0RVnk79Af-xNodlJCgGRf3KdFvZbhCRvuyu_nTNNBBLXXxj_hqzLcKu9wXjve6FoWnGTZi_VgZDVz3MI_Q2X7vGBCx9_Dh-RJdKEtRzm19Vu4y_IBKQVq6nL_Ezc1a-tOuHXBZJJFJO9aBezYj1mnjYCYyiGbnO1VjtS-ZPdFtvCtanI9c45l-Wl-J1TEszQJcASIYHfaQ4MBsTWzaUjlZEeXyi1l8MtIRvB5sTyTZgmPKvdeWSDfG6Ux5T-HTFlppEozQ4R6Q4GT5qs-U-1uNSxw-YHiF9NakVetKBrjye3e_wJI6oJ_




in class diagram termonlogy.
# means protect
- means private
+ means public


## When a class implements multiple interfaces in PHP, it must provide implementations for all the methods defined in those interfaces. If both interfaces have methods with the same name, the implementing class must provide a single implementation for that method, which will satisfy the requirements of both interfaces.

system desgin book
technical interview videos